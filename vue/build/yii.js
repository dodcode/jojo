// copy files in vue/dist to yii's views and web directories.

var fs = require('fs-extra');
var path = require('path');

var basePath = path.resolve('', './dist');

// First: rename .html file to .php file.
var htmlReg = new RegExp(".html");
var renameFile = function (dir) {
    // console.log(dir);
    var files = fs.readdirSync(dir);
    for (var i in files) {
        // do not process files in static folder.
        if (files[i] == 'static') {
            continue;
        }
        if (fs.statSync(dir + '/' + files[i]).isDirectory()) {
            // continue to process.
            renameFile(dir + '/' + files[i]);
        } else {
            // console.log(files[i]);
            // console.log(htmlReg.test(files[i]));
            if (htmlReg.test(files[i])) {
                var newFile = files[i].replace(/html/, "php");
                fs.move(dir + '/' + files[i], dir + '/' + newFile, function (err) {
                    if (err) return console.error(err);
                    console.log("success!")
                });
            }
        }
    }
};
renameFile(basePath);

// Second: copy files in "dist" directory to yii's relative directory
var files = fs.readdirSync(basePath);
for (var file in files) {

    var dir = path.resolve(basePath, './'+files[file]);
    if (fs.statSync(dir).isDirectory()) {
        // console.log(dir);
        var viewsDst = path.resolve(basePath, '../../views') + '/'+files[file]
        var webDst = path.resolve(basePath, '../../web') + '/'+files[file]

        if (files[file] != 'static') {
            fs.copy(dir, viewsDst, function(err) {
                if (err) return console.error(err)
                console.log("success!")
            });
        } else {
            fs.copy(dir, webDst, function(err) {
                if (err) return console.error(err)
                console.log("success!")
            });
        }
    }
}
