---
{"category_name":"easy","problem_code":"BURGER","problem_name":"Double Burgers","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n1 7\r\n1 4","output":"3\r\n4","explanation":"","isDeleted":false}}},"video_editorial_url":"https://youtu.be/mszXi1dxXKw","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"suni30102","problem_tester":"","date_added":"14-05-2021","tags":{"0":"cook129","1":"easy","2":"greedy","3":"suni30102"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/BURGER","time":{"view_start_date":1621794602,"submit_start_date":1621794602,"visible_start_date":1621794602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BURGER","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK129/mandarin/BURGER.pdf), [Russian](https://www.codechef.com/download/translated/COOK129/russian/BURGER.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK129/vietnamese/BURGER.pdf) and [Bengali](https://www.codechef.com/download/translated/COOK129/bengali/BURGER.pdf) as well.

You have taken an eating challenge from Chef and now you have to eat exactly $Y$ burgers. You will eat in the following way:

- In the first minute you will eat exactly $X$ burgers and every minute after that you will eat exactly twice the number of burgers you ate in the previous minute. 
- Since you can get tired of eating, Chef also allows you take a break from eating for exactly $1$ minute.
- When you start eating again after taking a break, your eating streak resets, i.e. in the first minute after the break you will eat exactly $X$ burgers and every minute after that you will eat exactly double the burgers you ate on the previous minute. 

Let $a_1, a_2, ..., a_k$ be the lengths of your eating streaks in minutes. Chef requires that all $a_i$ are pairwise distinct.

Find the minimum number of minutes you need to eat exactly $Y$ burgers or determine it is impossible to do so.

###Input

- The first line contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $X$ and $Y$.

###Output
For each test case, print a single line containing one integer — the minimum number of minutes you need to eat exactly $Y$ burgers, or $−1$ if it is impossible.

###Constraints 
- $1\leq T\leq 10^5$
- $1\leq X,Y\leq 10^{18}$

###Sample Input
```
2
1 7
1 4
```

###Sample Output
```
3
4
```
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>