---
{"category_name":"school","problem_code":"NOTIME","problem_name":"No Time to Wait","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/THEZiy7IXwM","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"4-03-2021","tags":{"0":"cakewalk","1":"daanish_adm","2":"march21"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/NOTIME","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=NOTIME","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/MARCH21/bengali/NOTIME.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MARCH21/mandarin/NOTIME.pdf), [Russian](https://www.codechef.com/download/translated/MARCH21/russian/NOTIME.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MARCH21/vietnamese/NOTIME.pdf) as well.

Only $x$ hours are left for the March Long Challenge and Chef is only left with the last problem unsolved. However, he is sure that he cannot solve the problem in the remaining time. From experience, he figures out that he needs exactly $H$ hours to solve the problem. 

Now Chef finally decides to use his special power which he has gained through years of intense yoga. He can travel back in time when he concentrates. Specifically, his power allows him to travel to $N$ different time zones, which are $T_1, T_2, \ldots, T_N$ hours respectively behind his current time.

Find out whether Chef can use one of the available time zones to solve the problem and submit it before the contest ends.

### Input
- The first line of the input contains three space-separated integers $N$, $H$ and $x$.
- The second line contains $N$ space-separated integers $T_1, T_2, \ldots, T_N$.

### Output
Print a single line containing the string `"YES"` if Chef can solve the problem on time or `"NO"` if he cannot.

You may print each character of each string in uppercase or lowercase (for example, the strings "yEs", "yes", "Yes" and "YES" will all be treated as identical).

### Constraints
- $1 \leq N \leq 100$
- $1 \leq x \lt H \leq 100$
- $1 \leq T_i \leq 100$ for each valid $i$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input 1
```
2 5 3
1 2
```

### Example Output 1
```
YES
```

### Explanation
Chef already has $3$ hours left. He can go to the $2$-nd time zone, which is $2$ hours back in time. Then he has a total of $3 + 2 = 5$ hours, which is sufficient to solve the problem.

### Example Input 2
```
2 6 3
1 2
```

### Example Output 2
```
NO
```

### Explanation
If Chef goes to the $1$-st time zone, he will have $3 + 1 = 4$ hours, which is insufficient to solve the problem.

If he goes to the $2$-nd time zone, he will have $3 + 2 = 5$ hours, which is also insufficient to solve the problem.

Since none of the time travel options can be used to gain sufficient time to solve the problem, Chef is incapable of solving it.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>