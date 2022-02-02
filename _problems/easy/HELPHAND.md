---
{"category_name":"easy","problem_code":"HELPHAND","problem_name":"Helping Hands","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"dj_r_1","problem_tester":"","date_added":"24-06-2020","tags":{"0":"dj_r_1"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"","time":{"view_start_date":1597339800,"submit_start_date":1597339800,"visible_start_date":1597339800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=HELPHAND","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Tango Charlie and his friends are preparing for their online end-semester examination. Tango and his friends are very helpful and always try to teach each other. Here comes the twist, you live in the Star Trek world and can transfer knowledge instantaneously. 

There are $N$ friends including Tango Charlie. $i-th(1<=i<=N)$ friend has a knowledge level of $K_i = i$. In **one second** any two of them can transfer knowledge to each other and knowledge level of both of them will become $LCM(K_i,K_j)$. Here $i$ and $j$ are the index numbers of friends sharing knowledge.

You have to find the minimum time required so that all of them have the same knowledge.

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase contains of a single line of input, one integer $N$. 

###Output:
For each testcase, output in a single line the minimum time required to complete the knowledge transfer.

###Constraints 
- $1 \leq T \leq 10^4$
- $1 \leq N \leq 10^6$

###Sample Input:
```
2
3
4
```

###Sample Output:
```
2
3
```
###Explanation:
When $N=4$, our initial array $K$ looks like: $K=[1,2,3,4]$. Optimal steps are: $[1,2,3,4] -> [1,2,12,12] -> [12,2,12,12] -> [12,12,12,12]$.
Hence the answer is $3$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>