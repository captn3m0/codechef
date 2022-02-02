---
{"category_name":"easy","problem_code":"FIBOSEQ","problem_name":"Fibonacci concatenation","problemComponents":{"constraints":"- $1 \\leq T \\leq 10^5$\n- $1 \\leq n \\leq 10^5$\n","constraintsState":true,"subtasks":"","subtasksState":false,"inputFormat":"- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.\n- The first and only line of each test case contains a single integer $n$.\n","inputFormatState":true,"outputFormat":"For each test case, print a single line containing one integer - the sum of digits of all subsequences of $f[n]$, modulo $10^9 + 7$.","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"3\n1\n2\n3\n","output":"1\n2\n8\n","explanation":"**Test case $1$:** Since $f[1]=1$, we have only two subsequences, \u0022\u0022 (empty subsequence) and \u0022$1$\u0022. So the sum of digits of both subsequences is $ 0 + 1 = 1$.\n\n**Test case $2$:** Since $f[2] = 10$, we have four subsequences, \u0022\u0022 (empty subsequence), \u0022$1$\u0022, \u0022$0$\u0022 and \u0022$10$\u0022. So the sum of digits of all the subsequences is $0 + 1 + 0 + 1 = 2$.\n\n","isDeleted":false}}},"video_editorial_url":"https://youtu.be/Ooa3zU9z4O0","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"utkarsh_adm","problem_tester":"","date_added":"13-08-2021","tags":{"0":"binary","1":"binary","2":"dynamic","3":"dynamic","4":"easy","5":"easy","6":"fermat","7":"fermat","8":"start9","9":"start9","10":"utkarsh_adm"},"problem_difficulty_level":"Unavailable","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/FIBOSEQ","time":{"view_start_date":1629221400,"submit_start_date":1629221400,"visible_start_date":1629221400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=FIBOSEQ","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Mandarin Chinese](https://www.codechef.com/download/translated/START9/mandarin/FIBOSEQ.pdf) and [Bengali](https://www.codechef.com/download/translated/START9/bengali/FIBOSEQ.pdf).

Let's define Fibonacci concatenation sequence as follows:

- $f[0] = 0$, $f[1] = 1$

- $f[i] = f[i-1] + f[i-2]$, for every $i \geq 2$

Here $f[i]$ denotes the $i^{th}$ Fibonacci concatenation number and $+$ represents concatenation.

For example, $f[2] = f[1] + f[0] = 1 + 0 = 10$, $f[3] = f[2] + f[1] =$ $10 + 1 = $ $101$.

Given an integer $n$, you have to determine the sum of digits of all subsequences of the $n^{th}$ Fibonacci concatenation number $f[n]$,  modulo $10^9 + 7$.


A *subsequence* of a number is a sequence of digits that can be derived from the number by deletion of several (possibly, zero or all) digits without changing the order of the remaining digits. The subsequence may even start with trailing zeros. For example $10$, $01$ are subsequences of $101$ while $110$ is NOT a subsequence of $101$. Note that there are $8$ subsequences of $101$. The subsequence $1$ appears twice and should be counted as different while computing the sum.


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>