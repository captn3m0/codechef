---
{"category_name":"school","problem_code":"JDELAY","problem_name":"Judging Delay","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"28-09-2018","tags":{"0":"cakewalk","1":"kingofnumbers","2":"ltime64","3":"simulation","4":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/JDELAY","time":{"view_start_date":1538240402,"submit_start_date":1538240402,"visible_start_date":1538240402,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Bengali](http://www.codechef.com/download/translated/LTIME64/bengali/JDELAY.pdf) , [Mandarin chinese](http://www.codechef.com/download/translated/LTIME64/mandarin/JDELAY.pdf) , [Russian](http://www.codechef.com/download/translated/LTIME64/russian/JDELAY.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME64/vietnamese/JDELAY.pdf) as well.


You have been recently hired as a developer in CodeChef. Your first mission is to implement a feature that will determine the number of submissions that were judged late in a contest.

There are $N$ submissions, numbered $1$ through $N$. For each valid $i$, the $i$-th submission was submitted at time $S_i$ and judged at time $J_i$ (in minutes). Submitting and judging both take zero time. Please determine how many submissions received their verdicts after a delay of more than $5$ minutes.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of the input contains a single integer $N$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $S_i$ and $J_i$.

### Output
For each test case, print a single line containing one integer — the number of submissions for which the judging was delayed by more than 5 minutes.

### Constraints 
- $1 \le T \le 100$
- $1 \le N \le 100$
- $1 \le S_i \le J_i \le 300$ for each valid $i$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
1
5
1 3
4 4
4 10
1 11
2 7
```

### Example Output
```
2
```
	
### Explanation
**Example case 1:** The delays of the respective submissions are $2$ minutes, $0$ minutes, $6$ minutes, $10$ minutes and $5$ minutes. Only submissions $3$ and $4$ are delayed by more than $5$ minutes, hence the answer is $2$.
