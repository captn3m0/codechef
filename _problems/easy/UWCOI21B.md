---
{"category_name":"easy","problem_code":"UWCOI21B","problem_name":"Array Swaps","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"smjleo","problem_tester":"","date_added":"13-12-2020","tags":{"0":"simple","1":"smjleo","2":"uwcoi21"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/UWCOI21B","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=UWCOI21B","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Salmon received an array $A$ of size $N$ and an array $B$ of size $M$ for Christmas. He would like to move all the elements in $B$ to $A$ using a special method described below.

While $B$ is not empty, Salmon does the following operations in order:

* Remove and store the leftmost element off of B (let's call this element $X$).
* Place $X$ at the start of $A$.
* Keep swapping $X$ and the element to the right of it repeatedly until $X$ is at the rightmost position of $A$ or $X$ is greater or equal to the element to the right of it.

Before performing the operations, Salmon can rearrange both A and B in any order once. He would like to do as little work as possible -- determine the minimum possible amount of swaps.

###Input:
The first line of input will consist of a two space-separated integers, $N$ and $M$ ($1 \le N, M \le 2*10^5$).

The next line will consist of $N$ space-separated integers, with the $i$-th input representing $A[i]$ ($-10^9 \le A[i] \le 10^9$).

The next line will consist of $M$ space-separated integers, with the $i$-th input representing $B[i]$ ($-10^9 \le B[i] \le 10^9$).

###Output:
Output a single integer, the minimum number of swaps required.

###Subtasks:
* Subtask 1 [15 points]: $A[i] = 1, B[i] = 1$ for all $i$.
* Subtask 2 [30 points]: $N, M \le 10^3$.
* Subtask 3 [55 points]: No additional constraints.

###Sample Input:
	5 3
	10 5 2 5 4
	3 1 2

###Sample output:
	5

###Explanation:
Salmon can reorder $A$ to be $[2, 10, 5, 4, 5]$ and $B$ to be $[1, 2, 3]$. 

###Note:
The answer may be greater than the limit for a 32-bit integer. Use `long long` instead of `int` for C++ and `long` for Java. Please check your language documentation for other languages on how to use 64-bit integers. Note that Python solutions won't encounter a problem as it uses BigIntegers by default.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>