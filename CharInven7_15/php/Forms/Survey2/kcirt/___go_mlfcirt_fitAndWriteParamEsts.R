options(width=200, stringsAsFactors=FALSE)


projpath <- getwd() ; projpath


library(KFmlfcirt)

library(gdata)


dfItemArray <- read.xls( file.path("data", "MFC Dataset.xlsx") , sheet=1 )

mxDataX <- read.xls( file.path("data", "MFC Dataset.xlsx") , sheet=2 )

dim(mxDataX)

############### get rid of non-response columns
mxData <- as.matrix(mxDataX[ , grepl("^ID", colnames(mxDataX)) ])

dim(mxData)

N <- ncol(mxData) ; N


n.items <- nrow(dfItemArray) ; n.items

bIDvec <- NULL
for(i in 1:n.items) {
    this.bID <- dfItemArray$MFC.Blcok[i]
    if( !is.na(this.bID) ) { currBID <- this.bID }
    bIDvec[i] <- currBID
}

nuc <- length(unique(dfItemArray$Dimension)) ; nuc



constructMap.ls <- split(paste0(dfItemArray$Dimension, "(", dfItemArray$Signing, ")"), bIDvec)

###### here's your construct map:
constructMap.ls


#mxLambda <- dfItemArray$Signing

mu <- rep(0, n.items)

qTypes <- rep("R", n.items)

covEta <- diag(1, nuc)


qTypes <- mxData[ ,1]


mod1 <- mlfcirt.model(constructMap.ls=constructMap.ls, qTypes=qTypes, data=mxData, covEta=covEta)
## mod1


#mlfcirt.ystarinfo(mod1)


############################### add initial values for loadings estimates
mod1[[ "mxHatSlot" ]] <- mod1[[ "mxSlot" ]]

############################### add initial values for utilities estimates
mod1[[ "hatMu" ]] <- mod1[[ "mu" ]]


############################### add initial values for respondents' slace estimates
mod1[[ "mxHatEta" ]] <- matrix(0, N, nuc)


mss.sd.vec <- rep( seq(0.2, 0.001, length=5), 7 )






###################### FIT

mod3 <- mod1



xlamhat.mag <- rep(NA, length(mss.sd.vec))
xmuhat.mag <- rep(NA, length(mss.sd.vec))
xetahat.sd <- rep(NA, length(mss.sd.vec))

for(jj in 1:length(mss.sd.vec)) {
    
    
    mod3 <-
    mlfcirt.fitMSSlogitC(
    model=mod3,
    mss.sd=mss.sd.vec[jj],
    xmu.shrink=0.01,
    xlambda.shrink=0.02,
    xeta.shrink=0.004
    )
    xmuhat.mag[jj] <- mean(abs(mod3[[ "hatMu" ]]))
    xlamhat.mag[jj] <- mean(abs(mod3[[ "mxHatSlot" ]][ mod3[[ "mxSlotmask" ]] ]))
    
    xetahat.sd[jj] <- sqrt(mean(apply(mod3[[ "mxHatEta" ]], 1, var)))
    
    par(mfrow=c(4, 4))
    for(i in 1:ncol(mod3$mxHatEta)) {
        hist(mod3$mxHatEta[ ,i])
    }
    
    plot(xmuhat.mag, type="l")
    plot(xlamhat.mag, type="l")
    plot(xetahat.sd, type="l")
    
}




########## here is your estimated respondent scale covariance
cov(mod3[[ "mxHatEta" ]])

######### here is your estimated utilities
mod3[[ "hatMu" ]]

######### here is your estimated loadings
mod3[[ "mxHatSlot" ]]

######### here is your estimated respondent scales (columns in order 1-10)
mod3[[ "mxHatEta" ]]



save(mod3, file=file.path(projpath, "data", "mod3.RData"))




#################################################### WRITE OUT MODEL ESTS FOR PHP SCORING
#################################################### WRITE OUT MODEL ESTS FOR PHP SCORING
#################################################### WRITE OUT MODEL ESTS FOR PHP SCORING

options(width=200, stringsAsFactors=FALSE)

projpath <- getwd() ; projpath

library(KFmlfcirt)



load(file=file.path(projpath, "data", "mod3.RData"))


########### save utilities est to disk
write.table( mod3$hatMu, file.path("PHP_server", "hatMu.csv"), sep=",", quote=FALSE, row.names=FALSE, col.names=FALSE )

########### save loadings est to disk
write.table( as.vector(mod3$mxHatSlot), file.path("PHP_server", "hatSlot.csv"), sep=",", quote=FALSE, row.names=FALSE, col.names=FALSE )


########### save model constants to disk

############### nuc     du                        dy
xconst <- c(mod3$nuc, nrow(mod3$mxHatSlot), nrow(mod3$mxData))
write.table( as.vector(xconst), file.path("PHP_server", "modelconstants.csv"), sep=",", quote=FALSE, row.names=FALSE, col.names=FALSE )


xndxDpos <- apply(mod3$mxDelta, 1, function(x) { return( which(x == 1) ) } ) ; xndxDpos
xndxDneg <- apply(mod3$mxDelta, 1, function(x) { return( which(x == -1) ) } ) ; xndxDneg

write.table( as.vector(xndxDpos), file.path("PHP_server", "xndxDpos.csv"), sep=",", quote=FALSE, row.names=FALSE, col.names=FALSE )
write.table( as.vector(xndxDneg), file.path("PHP_server", "xndxDneg.csv"), sep=",", quote=FALSE, row.names=FALSE, col.names=FALSE )

invSqrtDiagCovStochastic <- (sqrt(diag(mod3$covStochastic)))^(-1) ; invSqrtDiagCovStochastic
write.table( as.vector(invSqrtDiagCovStochastic), file.path("PHP_server", "invSqrtDiagCovStochastic.csv"), sep=",", quote=FALSE, row.names=FALSE, col.names=FALSE )

########### save a lone response to disk for checking PHP

ii <- 10
write.table( as.vector(mod3$mxData[ , ii]), file.path("PHP_server", "aResponse.csv"), sep=",", quote=FALSE, row.names=FALSE, col.names=FALSE )


