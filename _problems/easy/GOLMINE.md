---
{"category_name":"easy","problem_code":"GOLMINE","problem_name":"Gold Mining","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n1\r\n30 2 1\r\n3\r\n10 1 1\r\n20 2 2\r\n30 3 3","output":"10.00000 20.00000\r\n30.00000 30.00000","explanation":"","isDeleted":false}}},"video_editorial_url":"https://youtu.be/YB53WbTdGA4","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":"","date_added":"26-06-2020","tags":{"0":"admin3","1":"easy","2":"ltime85","3":"observation","4":"taran_1407"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/GOLMINE","time":{"view_start_date":1593277202,"submit_start_date":1593277202,"visible_start_date":1593277202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=GOLMINE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME85/hindi/GOLMINE.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME85/bengali/GOLMINE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME85/mandarin/GOLMINE.pdf), [Russian](https://www.codechef.com/download/translated/LTIME85/russian/GOLMINE.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME85/vietnamese/GOLMINE.pdf) as well.

Chef and Chefu are working as gold miners. There are a total of $N$ gold mines, numbered $1$ through $N$. For each valid $i$, the $i$-th gold mine contains $G_i$ gold in total; if only Chef worked in it, it would take him $A_i$ days to completely mine it, while if only Chefu worked in it, it would take him $B_i$ days.

Each of our miners may only work in one mine at a time, but they may decide to start working in another mine at any time (even in the middle of some day), any number of times. They also choose the mines to work in independently from each other and they may work in the same mine at the same time. Mining gold is a continuous process, i.e. if a miner works for $t$ days (where $t$ is a real number) in a mine where this miner has mining speed $g$ gold per day, then he will mine $g \cdot t$ gold. Obviously, it is impossible to work in a mine after no gold remains in it. For example, if a gold mine contains $30$ gold and Chef needs $2$ days to completely mine it, but he spends $1$ day in it, then he will mine $15$ gold; if Chefu needs $1$ day to completely mine the same gold mine, and both Chef and Chefu start working in this mine at the same time, it will be empty after $2/3$ days ― Chefu will mine $20$ gold, while Chef will mine $10$ gold.

At each point of time, both Chef and Chefu know the gold mine in which the other miner is working. Each of them wants to gather the maximum amount of gold for himself. Find the amounts of gold the miners will have if they both act optimally.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains three space-separated integers $G_i$, $A_i$ and $B_i$.

### Output
For each test case, print a single line containing two space-separated real numbers ― the amount of gold mined by Chef and the amount of gold mined by Chefu. Your answer will be considered correct if the absolute or relative error of each amount of gold does not exceed $10^{-6}$.

### Constraints
- $1 \le T \le 1,000$
- $1 \le N \le 10^5$
- $1 \le G_i \le 10^5$ for each valid $i$
- $1 \le A_i \le 10^5$ for each valid $i$
- $1 \le B_i \le 10^5$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (50 points):** $N \le 2$

**Subtask #2 (50 points):** original constraints

### Example Input
```
2
1
30 2 1
3
10 1 1
20 2 2
30 3 3
```

### Example Output
```
10.00000 20.00000
30.00000 30.00000
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>