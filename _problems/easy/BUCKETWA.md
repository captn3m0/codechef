---
{"category_name":"easy","problem_code":"BUCKETWA","problem_name":"Get a Bucket of Water","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":null,"date_added":"20-12-2018","tags":{"0":"admin3"},"time":{"view_start_date":1545503400,"submit_start_date":1545503400,"visible_start_date":1545503400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>A straight river $R$ is flowing nearby. Your house $H$ is located on the same side of river as your piece of land $L$ where you would like to supply a bucket of water taken from the river. 

Perpendicular distances of your house and piece of land from the flowing river are $d_H$ and $d_L$ units respectively. Perpendicular distance of the lines from $H$ to the river and $L$ to the river is $d_R$. Find the distance you will have to cover for reaching the river bank from your house with an empty bucket, and then reaching your piece of land with bucket filled with water in minimum time. Speed of walking with a bucket filled with water is $k$ times slower than speed of walking with bucket without water.

###Input
- Each instance of the problem is a single line with four positive numbers $d_H$, $d_L$, $d_R$ and $k$, each less than 100000, given in a single line. 
- Input stream ends with four zeros in the last line. 
- Input contains no more than 1000 test cases.

###Output 
- For each instance output a single number representing the distance from $H$ to $L$ touching $R$, which you will have to cover if you are minimizing the total time taken. The answer will be correct if your solution is within $10^{-2}$ of the expected solution.

###Sample Input
```
6 7 10 3
0 0 0 0
```

###Sample Output
```
17.31
```