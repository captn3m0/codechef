---
{"category_name":"school","problem_code":"PCJ18C","problem_name":"Chef and Polygon Cakes","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"madhav_1999","problem_tester":null,"date_added":"28-07-2018","tags":{"0":"madhav_1999","1":"madhav_1999","2":"pcj","3":"prakhar17252","4":"proconjunior","5":"tanmay28"},"editorial_url":"https://discuss.codechef.com/problems/PCJ18C","time":{"view_start_date":1534176000,"submit_start_date":1534176000,"visible_start_date":1534176000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Chef is making polygon cakes in his kitchen today! 

Since the judge panel is very strict, Chef's cakes must be beautiful and have sharp and precise $internal$ angles in arithmetic progression. 

Given the number of sides, $N$, of the cake Chef is baking today and also the measure of its first angle(smallest angle), $A$, find the measure of the $K^{th}$ angle.

###Input:
- The first line contains a single integer $T$, the number of test cases. 
- The next $T$ lines contain three space separated integers $N$, $A$ and $K$, the number of sides of polygon, the first angle and the $K^{th}$ angle respectively. 

###Output:
For each test case, print two space separated integers $X$ and $Y$, such that the $K^{th}$ angle can be written in the form of $X/Y$ and $gcd(X, Y) = 1$

###Constraints 
- $1 \leq T \leq 50$
- $3 \leq N \leq 1000$
- $1 \leq A \leq 1000000000$
- $1 \leq K \leq N$
- It is guaranteed the answer is always valid.

###Sample Input:
        1
        3 30 2

###Sample Output:
        60 1
	