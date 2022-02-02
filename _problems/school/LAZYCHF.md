---
{"category_name":"school","problem_code":"LAZYCHF","problem_name":"Lazy Chef","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n1 1 0\r\n1 3 1\r\n2 2 3","output":"1\r\n2\r\n4","explanation":"**TestCase $1$:** Chef takes $1 * 1 = 1$ unit of time which is equal to the upper bound($1 + 0 = 1$ unit) to do the work.   \r\n\r\n**TestCase $2$:** Chef takes $min(1 * 3, 1 + 1) = min(3, 2) = 2$ units of time to do the work.   \r\n\r\n**TestCase $3$:** Chef takes $2 * 2 = 4$ units of time which is less than the upper bound($2 + 3 = 5$ units) to do the work.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/7W0B4ofCltQ","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"18-05-2021","tags":{"0":"cakewalk","1":"daanish_adm","2":"start4"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/LAZYCHF","time":{"view_start_date":1622381400,"submit_start_date":1622381400,"visible_start_date":1622381400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=LAZYCHF","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/START4/bengali/LAZYCHF.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/START4/mandarin/LAZYCHF.pdf), [Russian](https://www.codechef.com/download/translated/START4/russian/LAZYCHF.pdf), and [Vietnamese](https://www.codechef.com/download/translated/START4/vietnamese/LAZYCHF.pdf) as well.

Chef is a very lazy person. Whatever work is supposed to be finished in $x$ units of time, he finishes it in $m * x$ units of time. But there is always a limit to laziness, so he delays the work by at max $d$ units of time. Given $x, m, d$, find the maximum time taken by Chef to complete the work.

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase contains a single line of input, three integers $x, m, d$. 

###Output:
For each testcase, output in a single line answer to the problem.

###Constraints 
- $1 \leq T \leq 10^4$
- $1 \leq x, m \leq 10$
- $0 \leq d \lt 100$

###Sample Input:
```
3
1 1 0
1 3 1
2 2 3
```

###Sample Output:
```
1
2
4
```
	
###Explanation:
**TestCase $1$:** Chef takes $1 * 1 = 1$ unit of time which is equal to the upper bound($1 + 0 = 1$ unit) to do the work.   

**TestCase $2$:** Chef takes $min(1 * 3, 1 + 1) = min(3, 2) = 2$ units of time to do the work.   

**TestCase $3$:** Chef takes $2 * 2 = 4$ units of time which is less than the upper bound($2 + 3 = 5$ units) to do the work.   
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>