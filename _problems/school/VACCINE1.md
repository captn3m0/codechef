---
{"category_name":"school","problem_code":"VACCINE1","problem_name":"Vaccine Production","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/37V_Us5lZ-s","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"3-12-2020","tags":{"0":"basic","1":"cakewalk","2":"ceiling","3":"daanish_adm","4":"dec20"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/VACCINE1","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=VACCINE1","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/DEC20/hindi/VACCINE1.pdf), [Bengali](https://www.codechef.com/download/translated/DEC20/bengali/VACCINE1.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/DEC20/mandarin/VACCINE1.pdf), [Russian](https://www.codechef.com/download/translated/DEC20/russian/VACCINE1.pdf), and [Vietnamese](https://www.codechef.com/download/translated/DEC20/vietnamese/VACCINE1.pdf) as well.

Increasing COVID cases have created panic amongst the people of Chefland, so the government is starting to push for production of a vaccine. It has to report to the media about the exact date when vaccines will be available.

There are two companies which are producing vaccines for COVID. Company A starts producing vaccines on day $D_1$ and it can produce $V_1$ vaccines per day. Company B starts producing vaccines on day $D_2$ and it can produce $V_2$ vaccines per day. Currently, we are on day $1$.

We need a total of $P$ vaccines. How many days are required to produce enough vaccines? Formally, find the smallest integer $d$ such that we have enough vaccines at the end of the day $d$.

### Input
- The first and only line of the input contains five space-separated integers $D_1$, $V_1$, $D_2$, $V_2$ and $P$.

### Output
Print a single line containing one integer ― the smallest required number of days.

### Constraints
- $1 \le D_1, V_1, D_2, V_2 \le 100$
- $1 \le P \le 1,000$

### Subtasks
**Subtask #1 (30 points):** $D_1 = D_2$

**Subtask #2 (70 points):** original constraints

### Example Input 1
```
1 2 1 3 14
```

### Example Output 1
```
3
```

### Explanation
Since $D_1 = D_2 = 1$, we can produce $V_1 + V_2 = 5$ vaccines per day. In $3$ days, we produce $15$ vaccines, which satisfies our requirement of $14$ vaccines.

### Example Input 2
```
5 4 2 10 100
```

### Example Output 2
```
9
```

### Explanation
There are $0$ vaccines produced on the first day, $10$ vaccines produced on each of days $2$, $3$ and $4$, and $14$ vaccines produced on the fifth and each subsequent day. In $9$ days, it makes a total of $0 + 10 \cdot 3 + 14 \cdot 5 = 100$ vaccines.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>