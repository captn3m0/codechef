---
{"category_name":"school","problem_code":"PCJ18A","problem_name":"Chef and Secret Ingredient","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"madhav_1999","problem_tester":null,"date_added":"28-07-2018","tags":{"0":"madhav_1999","1":"madhav_1999","2":"pcj","3":"prakhar17252","4":"proconjunior","5":"tanmay28"},"editorial_url":"https://discuss.codechef.com/problems/PCJ18A","time":{"view_start_date":1534176000,"submit_start_date":1534176000,"visible_start_date":1534176000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Today Chef wants to evaluate the dishes of his $N$ students. He asks each one to cook a dish and present it to him.

Chef loves his secret ingredient, and only likes dishes with at least $X$ grams of it.
Given $N$, $X$ and the amount of secret ingredient used by each student $A_i$, find out whether Chef will like at least one dish. 

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- The first line of each testcase contains two integers $N$ 
 (number of students) and $X$ (minimum amount of secret ingredient that a dish must contain for Chef to like it).
- The next line contains $N$ space separated integers, $A_i$ denoting the amount of secret ingredient used by the students in their dishes.

###Output:
For each testcase, print a single string "YES" if Chef likes at least one dish. Otherwise, print "NO". (Without quotes).

###Constraints: 
- $1 \leq T \leq 100$
- $1 \leq N \leq 1000$
- $1 \leq X \leq 1000000$
- $1 \leq A_i \leq 1000000$

###Sample Input:
        3
        5 100
        11 22 33 44 55
        5 50
        10 20 30 40 50
        5 45
        12 24 36 48 60
###Sample Output:
        NO
        YES
        YES