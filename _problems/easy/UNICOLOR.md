---
{"category_name":"easy","problem_code":"UNICOLOR","problem_name":"Uniform","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n2 6 3\r\n2\r\n1 2 5 6\r\n1\r\n4 6","output":9,"explanation":"**Example case 1:** Students $5$ and $6$ are in both clubs, so these two clubs must wear shirts with the same colour. Student $3$ does not participate in any club and can wear a shirt with any colour out of the three available options.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/iW5WZIpruP4","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"trafagar3","problem_tester":"","date_added":"2-01-2021","tags":{"0":"binary","1":"easy","2":"ltime94","3":"trafagar3"},"problem_difficulty_level":"Easy-Medium","best_tag":"Binary Exponentation","editorial_url":"https://discuss.codechef.com/problems/UNICOLOR","time":{"view_start_date":1616864402,"submit_start_date":1616864402,"visible_start_date":1616864402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=UNICOLOR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Russian](https://www.codechef.com/download/translated/LTIME94/russian/UNICOLOR.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME94/bengali/UNICOLOR.pdf), and [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME94/mandarin/UNICOLOR.pdf) as well.

In a school, there are $C$ clubs (numbered $1$ through $C$) that students can participate in. Each student can be in zero, one or multiple clubs.

Tomorrow, there is a school assembly and $N$ students (numbered $1$ through $N$) will be standing in a line. Each student should wear one of $M$ single-colour shirts provided by the school. The only restriction is that for each club, students in this club must wear shirts with the same colour (possibly the same colour for multiple clubs).

Students in the same clubs try to stand near each other. Formally, for each club $i$, you are given $x_i$ segments — let's denote them by $[l_1,r_1],[l_2,r_2], \ldots, [l_{x_i},r_{x_i}]$, where $1 \le l_1 \le r_1 \lt l_2 \le r_2 \lt \ldots \lt l_{x_i} \le r_{x_i} \le N$ — such for each valid $j$, the students $l_j, l_j+1, \ldots, r_j$ belong to this club.

Determine the number of ways in which the students can choose the colours of their shirts. Two ways to choose colours are considered different if there is at least one student wearing a shirt with a different colour. Since this number can be very large, compute it modulo $998,244,353$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $C$, $N$ and $M$. 
- Then, $2C$ lines follow. For each valid $i$, the $(2i-1)$-th of these lines contains a single integer $x_i$ and the $2i$-th line contains $2 \cdot x_i$ space-separated integers $l_1,r_1,l_2,r_2, \ldots, l_{x_i},r_{x_i}$.

### Output
For each test case, print a single line containing one integer — the number of ways to choose colours modulo $998,244,353$.

### Constraints
- $1 \le T \le 10$
- $1 \le N, M \le 10^9$
- $1 \le C \le 1,000$
- $1 \le x_i \le 100$ for each valid $i$

### Subtasks
**Subtask #1 (30 points):** $N \le 1,000$

**Subtask #2 (70 points):** original constraints
 
### Example Input
```
1
2 6 3
2
1 2 5 6
1
4 6
```

### Example Output
```
9
```

### Explanation
**Example case 1:** Students $5$ and $6$ are in both clubs, so these two clubs must wear shirts with the same colour. Student $3$ does not participate in any club and can wear a shirt with any colour out of the three available options.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>