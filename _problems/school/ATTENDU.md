---
{"category_name":"school","problem_code":"ATTENDU","problem_name":"Minimum Attendance Requirement","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n50\r\n00000000000000000000000000000000000000000000000000\r\n50\r\n01010101010101010101010101010101010101010101010101\r\n2\r\n01","output":"NO\r\nYES\r\nYES","explanation":"For Case 1, even if Chef attends all the remaining 70 days, he\u0027ll only have an attendance percentage of $70/120$ = $58.33\\%$ which is less than $75\\%$.\r\n\r\nFor Case 2, maximum attendance possible is $79.167\\%$ which is more than $75\\%$.\r\n\r\nFor Case 3, maximum attendance possible is $99.167\\%$ which is more than $75\\%$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/P1A6nT4V62Y","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"21-12-2020","tags":{"0":"cakewalk","1":"cook125","2":"daanish_adm","3":"rajarshi_basu"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/ATTENDU","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ATTENDU","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK125/hindi/ATTENDU.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK125/mandarin/ATTENDU.pdf),  [Vietnamese](https://www.codechef.com/download/translated/COOK125/vietnamese/ATTENDU.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK125/bengali/ATTENDU.pdf) as well.

A semester in Chef's University has $120$ working days. The University's requirement is that a student should be present for at least $75\%$ of the working days in the semester. If not, the student is failed.

Chef has been taking a lot of holidays, and is now concerned whether he can pass the attendance requirement or not. $N$ working days have already passed, and you are given $N$ bits - $B_1$, $B_2$, ..., $B_N$. $B_i$ = $0$ denotes that Chef was absent on the $i^{th}$ day, and $B_i$ = $1$ denotes that Chef was present on that day.

Can Chef hope to pass the requirement by the end of the semester?

###Input:

- First line will contain $T$, the number of testcases. Then the testcases follow. 
- Each testcase contains two lines of input.
- The first line of each testcase contains a single integer, $N$, the number of days till now.
- The second line of each testcase contains a string $B$ of length $N$ where $B_i$ represents the status of the $i^{th}$ day.

###Output:
For each testcase, output the answer in a single line - "YES" if Chef can pass the attendance requirement and "NO" if not.

###Constraints 
- $1 \leq T \leq 10$
- $1 \leq N \leq 120$
- $0 \leq B_i \leq 1$

###Sample Input:
```
3
50
00000000000000000000000000000000000000000000000000
50
01010101010101010101010101010101010101010101010101
2
01
```
###Sample Output:
```
NO
YES
YES
```
	
###Explanation:
For Case 1, even if Chef attends all the remaining 70 days, he'll only have an attendance percentage of $70/120$ = $58.33\%$ which is less than $75\%$.

For Case 2, maximum attendance possible is $79.167\%$ which is more than $75\%$.

For Case 3, maximum attendance possible is $99.167\%$ which is more than $75\%$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>