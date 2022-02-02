---
{"category_name":"easy","problem_code":"QUIZPLAG","problem_name":"Plagiarism","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n1 1 1\r\n1\r\n1 1 2\r\n1 1\r\n5 5 10\r\n2 5 2 5 2 4 10 10 10 10","output":"0\r\n1 1\r\n2 2 5","explanation":"**Example case 1:** Since there is only a single attempt during the whole day, there cannot be any user who made more than one attempt.\r\n\r\n**Example case 2:** User $1$ attempted the quiz twice.\r\n\r\n**Example case 3:** Users $2$ and $5$ attempted the quiz multiple times. The admin with number $10$ also attempted the quiz multiple times, but admins are allowed to do that.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/aRwnOkMV5x4","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"13-05-2021","tags":{"0":"daanish_adm","1":"simple","2":"start4"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/QUIZPLAG","time":{"view_start_date":1622381400,"submit_start_date":1622381400,"visible_start_date":1622381400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=QUIZPLAG","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/START4/bengali/QUIZPLAG.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/START4/mandarin/QUIZPLAG.pdf), [Russian](https://www.codechef.com/download/translated/START4/russian/QUIZPLAG.pdf), and [Vietnamese](https://www.codechef.com/download/translated/START4/vietnamese/QUIZPLAG.pdf) as well.

You are an administrator of a popular quiz website. Every day, you hold a quiz on the website.

There are $N$ users (numbered $1$ through $N$) and $M$ admins (numbered $N+1$ through $N+M$). For each quiz, each user is allowed to attempt it at most once. Sometimes, admins attempt the quizzes for testing purposes too; an admin may attempt a quiz any number of times.

On a certain day, the quiz was attempted $K$ times. For each $i$ ($1 \le i \le K$), the $i$-th of these attempts was made by the person with number $L_i$. Find all the users who attempted the quiz more than once, in order to disqualify them.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $M$ and $K$.
- The second line contains $K$ space-separated integers $L_1, L_2, \ldots, L_K$.

### Output
For each test case, print a single line containing an integer $D$ denoting the number of users who should be disqualified, followed by a space and $D$ space-separated integers denoting their numbers in ascending order.

### Constraints
- $1 \leq T \leq 10$
- $0 \leq N, M \leq 10^5$
- $1 \leq N + M, K \leq 10^5$
- $1 \leq L_i \leq N + M$ for each valid $i$

### Example Input
```
3
1 1 1
1
1 1 2
1 1
5 5 10
2 5 2 5 2 4 10 10 10 10
```

### Example Output
```
0
1 1
2 2 5
```

### Explanation
**Example case 1:** Since there is only a single attempt during the whole day, there cannot be any user who made more than one attempt.

**Example case 2:** User $1$ attempted the quiz twice.

**Example case 3:** Users $2$ and $5$ attempted the quiz multiple times. The admin with number $10$ also attempted the quiz multiple times, but admins are allowed to do that.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>