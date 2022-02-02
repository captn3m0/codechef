---
{"category_name":"easy","problem_code":"POSAND","problem_name":"Positive AND","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"abelyan","problem_tester":"","date_added":"25-09-2020","tags":{"0":"abelyan","1":"ad","2":"constructive","3":"easy","4":"oct20"},"problem_difficulty_level":"Easy","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/POSAND","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=POSAND","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/OCT20/hindi/POSAND.pdf), [Bengali](https://www.codechef.com/download/translated/OCT20/bengali/POSAND.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/OCT20/mandarin/POSAND.pdf), [Russian](https://www.codechef.com/download/translated/OCT20/russian/POSAND.pdf), and [Vietnamese](https://www.codechef.com/download/translated/OCT20/vietnamese/POSAND.pdf) as well.

A permutation $p_1,p_2...p_N$ of $\{1, 2, ..., N\}$ is beautiful if $p_i \& p_{i+1}$ is greater than 0 for every $1 \leq i < N$ . You are given an integer $N$, and your task is toconstruct a beautiful permutation of length $N$ or determine that it's impossible.

Note that $a \& b$ denotes the [bitwise AND](https://en.wikipedia.org/wiki/Bitwise_operation#AND) of $a$ and $b$.

###Input:

First line will contain $T$, number of testcases. Then the testcases follow. 
Each testcase contains a single line of input, an integer $N$.

###Output:
For each test case output $-1$ if there is no suitable permutation of length $N$, otherwise output $N$ integers in a single line which form a beautiful permutation. If there are multiple answers output any of them.

###Constraints 
- $1 \leq N \leq 10^5$
- The sum of $N$ over all test cases does not exceed $10^6$
###Subtasks
- 50 points : $1 \leq N,T \leq 9$
- 50 points : Original constraints

###Sample Input:
```
3
4
3
5
```

###Sample Output:
```
-1
1 3 2
2 3 1 5 4
```	
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>