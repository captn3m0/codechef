---
{"category_name":"easy","problem_code":"PCJ18E","problem_name":"Chef and Sorting","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"madhav_1999","problem_tester":null,"date_added":"28-07-2018","tags":{"0":"madhav_1999","1":"madhav_1999","2":"pcj","3":"prakhar17252","4":"proconjunior","5":"tanmay28"},"editorial_url":"https://discuss.codechef.com/problems/PCJ18E","time":{"view_start_date":1534176000,"submit_start_date":1534176000,"visible_start_date":1534176000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Chef loves sorting! Chef recently learnt about a new form of sorting, endsort! 

While performing endsort of an array $A$ of $N$ distinct elements, Chef can move any element to the end of the array. 

However, Chef fears that this will take too much time. Help Chef find the number of moves to sort the given array in ascending order using endsort!

###Input:

- The first line contains a single integer $T$, the number of test cases. 
- The first line of each test case contains a single integer $N$, the number of elements of given array $A$. 
- The next line would contain $N$ space separated integers, the elements of the array. 

###Output:

Print a single integer, the minimum number of moves to sort the array in ascending order using endsort.

###Constraints 
- $1 \leq T \leq 10$
- $1 \leq N \leq 100000$
- $1 \leq A_{i} \leq 10^9$

###Sample Input:
        2
        5
        1 2 3 4 5
        5
        1 3 2 5 4

###Sample Output:
        0
        3 

###Explanation:
For the second sample, in the first move, we move 3 to the end of the array. In the second move, we move 4 to the end and finally in the third move, we move 5 to the end.