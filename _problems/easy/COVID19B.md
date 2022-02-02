---
{"category_name":"easy","problem_code":"COVID19B","problem_name":"Coronavirus Spread 2","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"4\r\n3\r\n1 2 3\r\n3\r\n3 2 1\r\n3\r\n0 0 0\r\n3\r\n1 3 2","output":"1 1\r\n3 3\r\n1 1\r\n1 2","explanation":"**Example case 1:** No two athletes will ever have the same position, so the virus cannot spread.\r\n\r\n**Example case 2:** It does not matter who is initially infected, the first athlete would always spread it to everyone.\r\n\r\n**Example case 3:** The athletes are not moving, so the virus cannot spread.\r\n\r\n**Example case 4:** The best possible scenario is when the initially infected athlete is the first one, since he cannot infect anyone else. In the worst possible scenario, eventually, the second and third athletes are infected.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/ss0Z2f5H3i8","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":"","date_added":"1-09-2020","tags":{"0":"alei","1":"alei","2":"brute","3":"sept20","4":"simulation"},"problem_difficulty_level":"Easy","best_tag":"Brute Force","editorial_url":"https://discuss.codechef.com/problems/COVID19B","time":{"view_start_date":1600075802,"submit_start_date":1600075802,"visible_start_date":1600075802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=COVID19B","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/SEPT20/hindi/COVID19B.pdf), [Bengali](https://www.codechef.com/download/translated/SEPT20/bengali/COVID19B.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/SEPT20/mandarin/COVID19B.pdf), [Russian](https://www.codechef.com/download/translated/SEPT20/russian/COVID19B.pdf), and [Vietnamese](https://www.codechef.com/download/translated/SEPT20/vietnamese/COVID19B.pdf) as well.

There are $N$ athletes (numbered $1$ through $N$) in a line. For each valid $i$, the $i$-th athlete starts at the position $i$ and his speed is $V_i$, i.e. for any real number $t \ge 0$, the position of the $i$-th athlete at the time $t$ is $i + V_i \cdot t$.

Unfortunately, one of the athletes is infected with a virus at the time $t = 0$. This virus only spreads from an infected athlete to another whenever their positions are the same at the same time. A newly infected athlete may then infect others as well.

We do not know which athlete is infected initially. However, if we wait long enough, a specific set of athletes (depending on the athlete that was infected initially) will become infected. Your task is to find the size of this set, i.e. the final number of infected people, in the best and worst possible scenario.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $V_1, V_2, \ldots, V_N$.

### Output
For each test case, print a single line containing two space-separated integers ― the smallest and largest final number of infected people.

### Constraints
- $1 \le T \le 10^4$
- $3 \le N \le 5$
- $0 \le V_i \le 5$ for each valid $i$

### Subtasks
**Subtask #1 (1 point):** $N = 3$

**Subtask #2 (99 points):** original constraints

### Example Input
```
4
3
1 2 3
3
3 2 1
3
0 0 0
3
1 3 2
```

### Example Output
```
1 1
3 3
1 1
1 2
```

### Explanation
**Example case 1:** No two athletes will ever have the same position, so the virus cannot spread.

**Example case 2:** It does not matter who is initially infected, the first athlete would always spread it to everyone.

**Example case 3:** The athletes are not moving, so the virus cannot spread.

**Example case 4:** The best possible scenario is when the initially infected athlete is the first one, since he cannot infect anyone else. In the worst possible scenario, eventually, the second and third athletes are infected.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>