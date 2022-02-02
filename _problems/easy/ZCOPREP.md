---
{"category_name":"easy","problem_code":"ZCOPREP","problem_name":"How many Topics","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"akash_adm","problem_tester":null,"date_added":"31-10-2019","tags":{"0":"akash_adm"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"","time":{"view_start_date":1572712200,"submit_start_date":1572712200,"visible_start_date":1572712200,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ZCOPREP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
ZCO is approaching, and you want to be well prepared!  

There are $N$ topics to cover and the $i^{th}$ topic takes $H_i$ hours to prepare (where $1 \le i \le N$). You have only $M$ days left to prepare, and you want to utilise this time wisely. You know that you can't spend more than $S$ hours in a day preparing, as you get tired after that. You don't want to study more than one topic in a day, and also, don't want to spend more than two days on any topic, as you feel that this is inefficient.  

Given these constraints, can you find the maximum number of topics you can prepare, if you choose the topics wisely?

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- The first line of each test case contains three space-separated integers: $N$, $M$ and $S$, denoting the number of topics, the number of days remaining and the number of hours you can study in a day.  
- The second line of each test case contains $N$ space-separated integers $H_i$, denoting the number of hours needed to prepare for the $i^{th}$ topic.
###Output:
For each testcase, output in a single line: the maximum number of topics you can prepare.
###Constraints 
- $1 \leq T \leq 10$
- $1 \leq N \leq 10^5$
- $1 \leq M \leq 10^5$
- $1 \leq S \leq 16$
- $1 \leq H_i \leq 50$

###Subtasks
- 30 points : Every topic takes the same number of hours to prepare (i.e. all $H_i$ are equal).
- 70 points : Original constraints.

###Sample Input:  
```
2
5 4 10
10 24 30 19 40
5 4 16
7 16 35 10 15
```
###Sample Output:
```
2
4
```
###Explanation:
**Testcase 1:**  
You can choose topics $1$ and $4$. Topic $1$ will consume a single day , while topic $4$ will consume two days.  Thus, you'll be able to prepare these two topics within the 4 remaining days. But you can check that you cannot do any better.

**Testcase 2:**    
You can choose topics $1$, $2$, $4$, and $5$. Each of them will consume one day each. Thus you'll be able to cover $4$ topics.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>