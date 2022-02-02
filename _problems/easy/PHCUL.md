---
{"category_name":"easy","problem_code":"PHCUL","problem_name":"Physical Exercise","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"vladprog","problem_tester":null,"date_added":"14-06-2019","tags":{"0":"challenge","1":"nov19","2":"vladprog","3":"watcher"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/PHCUL","time":{"view_start_date":1573464602,"submit_start_date":1573464602,"visible_start_date":1573464602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PHCUL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/NOV19/hindi/PHCUL.pdf), [Bengali](https://www.codechef.com/download/translated/NOV19/bengali/PHCUL.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/NOV19/mandarin/PHCUL.pdf), [Russian](https://www.codechef.com/download/translated/NOV19/russian/PHCUL.pdf), and [Vietnamese](https://www.codechef.com/download/translated/NOV19/vietnamese/PHCUL.pdf) as well.

Chef decided to exercise by running somewhere from ShareChat. He chose three sets of points in a plane:
- A set of $N$ points (numbered $1$ through $N$): for each valid $i$, the $i$-th of them has coordinates $(a_i, b_i)$.
- A set of $M$ points (numbered $1$ through $M$): for each valid $i$, the $i$-th of them has coordinates $(c_i, d_i)$.
- A set of $K$ points (numbered $1$ through $K$): for each valid $i$, the $i$-th of them has coordinates $(e_i, f_i)$.

ShareChat has coordinates $(x, y)$. Chef must choose one point $(a_j, b_j)$, one point $(c_k, d_k)$, and one point $(e_l, f_l)$. Then, he starts running from ShareChat, visits the chosen points $(a_j, b_j)$ and $(c_k, d_k)$ in any order, and then runs to the point $(e_l, f_l)$, where he finishes his run.

Help Chef find the minimum distance he has to run.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $x$ and $y$.
- The second line contains three space-separated integers $N$, $M$ and $K$.
- The third line contains $2N$ space-separated integers $a_1, b_1, a_2, b_2, \ldots, a_N, b_N$.
- The fourth line contains $2M$ space-separated integers $c_1, d_1, c_2, d_2, \ldots, c_M, d_M$.
- The fifth line contains $2K$ space-separated integers $e_1, f_1, e_2, f_2, \ldots, e_K, f_K$.

### Output
For each test case, print a single line containing one real number ― the minimum distance.

Your answer will be considered correct if its absolute or relative error does not exceed $10^{-6}$.

### Constraints 
- $1 \le T \le 5,000$
- $1 \le N, M, K \le 5,000$
- $0 \le x, y \le 10^9$
- $0 \le a_i, b_i \le 10^9$ for each valid $i$
- $0 \le c_i, d_i \le 10^9$ for each valid $i$
- $0 \le e_i, f_i \le 10^9$ for each valid $i$
- the sum of $N+M+K$ over all test cases does not exceed $15,000$

### Subtasks
**Subtask #1 (50 points):** $1 \le N, M, K \le 100$

**Subtask #2 (50 points):** original constraints

### Example Input
```
2
1 4
3 2 2
4 4 2 0 8 1
10 1 3 1
1 3 9 5
6 4
2 2 3
7 10 5 7
1 6 2 3
1 8 0 7 0 2
```

### Example Output
```
8.1820424980
8.6995968482
```
	
### Explanation
**Example case 1:**

![](https://codechef_shared.s3.amazonaws.com/download/Images/NOV19/PHCUL/sample-1.jpg)

- The black point is ShareChat,
- Points from the first set are red.
- Points from the second set are green.
- Points from the third set are blue.
- The black line corresponds to Chef's run.

Chef should run from $(1, 4)$ to $(3, 1)$, then to $(2, 0)$ and then to $(1, 3)$. The distance is $\sqrt{13}+\sqrt{2}+\sqrt{10} \doteq 8.1820424980$.

**Example case 2:**

![](https://codechef_shared.s3.amazonaws.com/download/Images/NOV19/PHCUL/sample-2.jpg =240x303)

Chef should run from $(6, 4)$ to $(5, 7)$, then to $(1, 6)$ and then to $(0, 7)$. The distance is $\sqrt{10}+\sqrt{17}+\sqrt{2} \doteq 8.6995968482$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>