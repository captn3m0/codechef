---
{"category_name":"medium","problem_code":"KGCD","problem_name":"The Chosen One","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"abhi2402","problem_tester":"","date_added":"13-10-2020","tags":{"0":"abhi2402","1":"inclusion","2":"infy20","3":"medium","4":"sieve"},"problem_difficulty_level":"Medium","best_tag":"Inclusion Exclusion","editorial_url":"https://discuss.codechef.com/problems/KGCD","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=KGCD","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
_"You know Walter, sometimes it doesn't hurt to have someone watching your back"_

The Hitmen twins of the Juarez Cartel, Leonel and Marco Salamanca, often known as the "Cousins", have set off from Mexico in search of Walter White. They come across an informant, who only agrees to help them if they solve his puzzle of interesting numbers.

There are $N$ interesting numbers $A$<sub>$1$</sub>$,$ $A$<sub>$2$</sub>$,$ $...$ $A$<sub>$N$</sub> consisting of integers from $1$ to $N$.

The task is to find $K$<sup>$th$</sup> smallest $GCD$ among all $GCD$ $($ $A$<sub>$i$</sub>,$A$<sub>$j$</sub>$)$ for each $(i,j)$, such that $1 \leq i < j \leq N$.

Print the $K$<sup>$th$</sup> smallest $GCD$ and also find any pair having the resultant $GCD$ (print their indices).

###Input:

- The first line will contain $T$, number of testcases. $T$ testcases follow : 
- The first line of each testcase contains two space-separated integers $N, K$. 
- The second line of each testcase contains $N$ space-separated integers $A$<sub>$1$</sub>$,$ $A$<sub>$2$</sub>$,$ $...,$$A$<sub>$N$</sub>.

###Output:
For each test case, print two lines. On the first line, print the $K$<sup>$th$</sup> smallest $GCD$. On the second line, print any pair of indices $(x,y)$ such that $x$ != $y$ and $GCD$ $($ $A$<sub>$x$</sub>,$A$<sub>$y$</sub>$)$ = $K$<sup>$th$</sup> smallest $GCD$.

###Constraints 
- $1 \leq T \leq 10^4$
- $2 \leq N \leq 10^6$
- $1 \leq K \leq (N*(N-1))/2$
- $1 \leq A$<sub>$i$</sub> $  \leq  N$
- The sum of $N$ over all test cases does not exceed $10^6$

###Sample Input:
	2
    5 8
    2 4 4 1 3
    5 7
    2 4 4 1 3


###Sample Output:
	2
    1 2
	1
    4 5     
	
###EXPLANATION:
- For Test Case 1 :  $K$<sup>$th$</sup> smallest $GCD$ is $2$, and $GCD$ $($ $A$<sub>$1$</sub> , $A$<sub>$2$</sub>$)$ = $2$.

- For Test Case 2 : $K$<sup>$th$</sup> smallest $GCD$ is $1$, and $GCD$ $($ $A$<sub>$4$</sub> , $A$<sub>$5$</sub>$)$ = $1$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>