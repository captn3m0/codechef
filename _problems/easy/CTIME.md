---
{"category_name":"easy","problem_code":"CTIME","problem_name":"Cheating Time","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\n1 10 10\n0 10\n2 2 10\n0 5\n7 10\n2 2 100\n0 5\n5 10","output":"NO\nYES\nYES","explanation":"**Example case 1:** There is no point during the exam when Chef is not monitored, so he is unable to google even for a single second and will fail the exam.\n\n**Example case 2:** Chef can google for $2$ minutes (in the time interval $[5, 7]$, when he is not monitored) and hence will be able to pass the exam.\n\n**Example case 3:** Chef can google for $2$ minutes (in the time interval $[10, 12]$) and hence will be able to pass the exam.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/XREckae6Ewg","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"7-01-2021","tags":{"0":"daanish_adm","1":"easy","2":"sorting","3":"start4"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CTIME","time":{"view_start_date":1622381400,"submit_start_date":1622381400,"visible_start_date":1622381400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CTIME","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/START4/bengali/CTIME.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/START4/mandarin/CTIME.pdf), [Russian](https://www.codechef.com/download/translated/START4/russian/CTIME.pdf), and [Vietnamese](https://www.codechef.com/download/translated/START4/vietnamese/CTIME.pdf) as well.

Chef's college is conducting an online exam, where his camera will be monitored by one or more invigilators (supervisors). Once again, Chef failed to prepare for the exam on time and decided to google answers during it.

The exam starts at time $0$ and ends at time $F$ minutes. Chef needs a total of $K$ minutes of googling during the exam in order to pass it. There are $N$ invigilators (numbered $1$ through $N$); for each valid $i$, the $i$-th invigilator monitors Chef's camera during the time interval starting at $S_i$ minutes since the start of the exam and ending at $E_i$ minutes (where $0 \leq S_i \leq E_i \leq F$). He was resourceful enough to somehow get hold of these times and now he wants to know if he would be able to pass the exam if he googles the answers during the times when no one is looking at his camera.

**Note:** The time of googling need not be continuous and there can be multiple invigilators at some interval of time.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $K$ and $F$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $S_i$ and $E_i$.

### Output
For each test case, print a single line containing the string `"YES"` if it is possible to pass the exam or `"NO"` if it is impossible.

You may print each character of each string in uppercase or lowercase (for example, the strings "yEs", "yes", "Yes" and "YES" will all be treated as identical).

### Constraints
- $1 \leq T \leq 10^5$
- $1 \leq N \leq 10^5$
- $1 \leq F \leq 10^9$
- $0 \leq K \leq F$
- $0 \leq S_i \leq E_i \leq F$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $2 \cdot 10^5$

### Example Input
```
3
1 10 10
0 10
2 2 10
0 5
7 10
2 2 100
0 5
5 10
```

### Example Output
```
NO
YES
YES
```
	
### Explanation
**Example case 1:** There is no point during the exam when Chef is not monitored, so he is unable to google even for a single second and will fail the exam.

**Example case 2:** Chef can google for $2$ minutes (in the time interval $[5, 7]$, when he is not monitored) and hence will be able to pass the exam.

**Example case 3:** Chef can google for $2$ minutes (in the time interval $[10, 12]$) and hence will be able to pass the exam.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>