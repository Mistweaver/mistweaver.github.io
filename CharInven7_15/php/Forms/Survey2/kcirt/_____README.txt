

On your local machine, install

KFkcirt_0.5.9.tar.gz

then

KFmlfcirt_0.6.7.tar.gz

-- you DO NOT need to install these on your server.  These are needed only to parameterize your pilot data and save the parameter estimates.





In R, with kcirt_philseok_mlfcirtSend as your working directory, run the code in

___go_mlfcirt_fitAndWriteParamEsts.R


This will fit your simulated data (in real life, I'm assuming you'll be fitting pilot data), and save out some files in folder PHP_server.


Now, if you run _php.php on your server, you'll see that it scores the saved respondent scores from file aResponse.csv.



I grant you permission to use the above libraries of academic purposes.  Please do not redistribute these.  See files LICENSE


Dave Zes
Korn Ferry