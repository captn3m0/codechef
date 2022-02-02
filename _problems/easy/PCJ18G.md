---
{"category_name":"easy","problem_code":"PCJ18G","problem_name":"Chef and Pizza","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"madhav_1999","problem_tester":null,"date_added":"29-07-2018","tags":{"0":"madhav_1999","1":"madhav_1999","2":"pcj","3":"prakhar17252","4":"proconjunior","5":"tanmay28"},"editorial_url":"https://discuss.codechef.com/problems/PCJ18G","time":{"view_start_date":1534176000,"submit_start_date":1534176000,"visible_start_date":1534176000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Chef's pizza is the tastiest pizza to exist, and the reason for that is his special, juicy homegrown tomatoes. 

Tomatoes can be grown in rectangular patches of any side lengths. However, Chef only has a limited amount of land. 

Consider the entire town of Chefville to be consisting of cells in a rectangular grid of positive coordinates. 

Chef own all cells $(x, y)$ that satisfy $x*y \leq N$

As an example if $N = 4$, Chef owns the following cells: 

$(1, 1), (1, 2), (1, 3), (1, 4), (2, 1), (2, 2), (3, 1), (4, 1) $

Chef can only grow tomatoes in rectangular patches consisting only of cells which belong to him. Also, if he uses a cell, he must use it entirely. He cannot use only a portion of it. 

Help Chef find the number of unique patches of rectangular land that he can grow tomatoes in! Since this number can be very large, output it modulo $1000000007$.

###Input:
- The first line of the input contains $T$, the number of test cases.
- The next $T$ lines of input contains one integer $N$.

###Output:
For each testcase, output the number of ways modulo $1000000007$.

###Constraints 
- $1 \leq T \leq 5$
- $1 \leq N \leq 10^{10}$

###Sample Input:
        2
        4
        10000000000

###Sample Output:
        23
        227374950
	