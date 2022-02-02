---
{"category_name":"easy","problem_code":"MVALUE","problem_name":"Maximum Value","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n2   \r\n2 2\r\n3\r\n5 3 2","output":"4\r\n17","explanation":"**Case 1:** Only possible pair is $[2, 2]$ for which answer = $2 * 2 + 2 - 2$ = $4$.\r\n\r\n**Case 2:** There are six possible pairs. \r\n\r\nFor pairs $[2, 3]$ and $[3, 2]$, answer = $2 * 3 + max(2 - 3, 3 - 2)$ = $7$\r\n\r\nFor pairs $[3, 5]$ and $[5, 3]$ answer = $5 * 3 + max(3 - 5, 5 - 3)$ = $17$ and \r\n\r\nFor the pairs $[2, 5]$ and $[5, 2]$, answer = $2 * 5 + max(2 - 5, 5 - 2)$ = $13$. \r\n\r\nSo final answer is maximum of $\\{7, 17, 13\\}$ = $17$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/v8D2CMvTKwM","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"26-12-2020","tags":{"0":"daanish_adm","1":"easy","2":"observation","3":"start1","4":"taran_1407"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/MVALUE","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MVALUE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/START1/bengali/MVALUE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/START1/mandarin/MVALUE.pdf), [Russian](https://www.codechef.com/download/translated/START1/russian/MVALUE.pdf), and [Vietnamese](https://www.codechef.com/download/translated/START1/vietnamese/MVALUE.pdf) as well.

Given an array $A$ of size $N$. Find the maximum value of the expression $a * b + a - b$ where $a$ and $b$ are $2$ distinct elements of the array.

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase contains of two lines of input.
- First line will contain $N$, number of elements of the array. 
- Second line contains $N$ space separated integers, elements of the array $A$. 

###Output:
For each testcase, output in a single line answer to the problem.

###Constraints 
- $1 \leq T \leq 20$
- $2 \leq N \leq 10^5$
- $-10^9 \leq A_i \leq 10^9$

###Sample Input:
```
2
2   
2 2
3
5 3 2
```

###Sample Output:
```
4
17
```

###Explanation
**Case 1:** Only possible pair is $[2, 2]$ for which answer = $2 * 2 + 2 - 2$ = $4$.

**Case 2:** There are six possible pairs. 

For pairs $[2, 3]$ and $[3, 2]$, answer = $2 * 3 + max(2 - 3, 3 - 2)$ = $7$

For pairs $[3, 5]$ and $[5, 3]$ answer = $5 * 3 + max(3 - 5, 5 - 3)$ = $17$ and 

For the pairs $[2, 5]$ and $[5, 2]$, answer = $2 * 5 + max(2 - 5, 5 - 2)$ = $13$. 

So final answer is maximum of $\{7, 17, 13\}$ = $17$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>