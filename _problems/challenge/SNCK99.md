---
{"category_name":"challenge","problem_code":"SNCK99","problem_name":"(Challenge) SnackDown 99","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SCM guile","38":"PERL6","39":"ERL","40":"CLPS","41":"ICK","42":"NICE","43":"PRLG","44":"ICON","45":"COB","46":"SCM chicken","47":"PIKE","48":"SCM qobi","49":"ST","50":"NEM"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"alei","problem_tester":null,"date_added":"24-05-2019","tags":{"0":"alei"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"","time":{"view_start_date":1560763800,"submit_start_date":1560763800,"visible_start_date":1560763800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SNCK99","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JUNE19/hindi/SNCK99.pdf), [Bengali](https://www.codechef.com/download/translated/JUNE19/bengali/SNCK99.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JUNE19/mandarin/SNCK99.pdf), [Russian](https://www.codechef.com/download/translated/JUNE19/russian/SNCK99.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JUNE19/vietnamese/SNCK99.pdf) as well.

**This is an interactive problem.**

SnackDown 2099 will take part in the ChefLand International Office (CIO). Ada is in charge of preparation of the coding environment.

Ada prepared $N$ computer terminals (numbered $1$ through $N$) interconnected by $M$ bidirectional networking cables (numbered $1$ through $M$). Each of the cables connects two different terminals and no two different cables connect the same pair of terminals. Let's denote a cable between terminals $u$ and $v$ by $(u, v)$. At the contest site, there should be some guards that make sure everything runs smoothly. During the competition, each terminal is assigned either to a contestant or to a guard; note that the number of contestants is not fixed yet.

Ada assigns a *stability* to each terminal. Let's denote the stability of terminal $i$ by $S_i$. Also, let's denote the cost of removing cable $i$ by $W_i$.

Since there are many cables, the room is messy, so Ada decided to remove some of the cables (possibly none or all of them) one by one. However, after removing any cable, the stability of some terminal or the cost of removing some cable might change.

Ada thinks that it is dangerous to have cables directly connect terminals assigned to contestants (they could try to team up and share solutions!). To measure the danger of such a situation, she defined $D_C$ as the sum of $S_u \cdot S_v$ over all remaining cables $(u, v)$ such that the terminals $u$ and $v$ are both assigned to contestants.

Similarly, Ada thinks that it is dangerous to have cables directly connect terminals assigned to guards (they could start chatting and get distracted!). To measure the danger of this situation, she defined $D_G$ similarly to $D_C$, as the sum of $S_u \cdot S_v$ over all remaining cables $(u, v)$ such that the terminals $u$ and $v$ are both assigned to guards.

Let's denote the total cost of removing cables (sum of costs for all removed cables when they were removed) by $X$. Ada wants to minimise $X+D_C+D_G$. Help her prepare the coding environment! Specifically, choose some cables to remove and then assign the terminals to contestants or guards in such a way that $X+D_C+D_G$ is as small as possible.

### Interaction
- First, you should read $3+M$ lines describing the original network configuration.
    - The first of these lines contains two space-separated integers $N$ and $M$.
    - The second line contains $N$ space-separated integers $S_1, S_2, \ldots, S_N$ denoting the initial stabilities of the terminals.
    - The third line contains $M$ space-separated integers $W_1, W_2, \ldots, W_M$ denoting the initial costs of removing cables.
    - Each of the next $M$ lines contains two space-separated integers $u$ and $v$ denoting that terminals $u$ and $v$ are connected by a networking cable.
- Then, you should remove cables.
    - To remove a cable, you should print a line containing a single integer $w$ ($1 \le w \le M$) denoting the number of the cable you want to remove. You must not attempt to remove the same cable twice.
    - Then, you should read a line describing any changes in the stabilities or costs after this cable is removed, in one of the following formats:
        - `0 i x` ($1 \le i \le N$) denoting that the new value of $S_i$ is $x$
        - `1 i y` ($1 \le i \le M$) denoting that the new value of $W_i$ is $y$
        - `2` denoting that the stabilities and costs did not change
- When you do not want to remove any more cables, you must print a line containing the integer $-1$.
- Finally, you must print a line containing a single string with length $N$. For each valid $i$, the $i$-th character of this string should be 'C' if the $i$-th terminal is assigned to a contestant or 'G' if it is assigned to a guard.

If your output is invalid or you attempt to remove a cable multiple times, you will receive the Wrong Answer verdict. Don't forget to flush the output after printing each line!

### Constraints
- $1 \le N \le 2^9$
- $0 \le M \le N(N-1)/2$
- $1 \le u, v \le N$
- $1 \le S_i \le 2^{10}$ for each valid $i$
- $1 \le W_i \le 2^{17}$ for each valid $i$
- $1 \le x \le 2^{10}$
- $1 \le y \le 2^{17}$

### Example
```
Grader            You
4 6
1 2 3 4
1 2 3 4 5 6
1 2
2 3
3 4
4 1
2 4
1 3
                  3
0 1 2
                  4
1 2 3
                  -1
                  CCGG
```

### Explanation
<img src="https://codechef_shared.s3.amazonaws.com/download/Images/JUNE19/SNCK99/snck.png" height="225"></img>

### Scoring
The score of each test case (and therefore each test file) is $X+D_C+D_G$. The score of a submission is the sum of scores of all test files. Your goal is to minimise the score of your submission.

There are twenty test files. During the contest, the displayed score will account for exactly four test files, i.e. your score reflects your submission's performance on 20% (4/20) of the test files. However, if your program gets a non-AC verdict on any test file, your submission's verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to include the sum of your program's scores over the other sixteen test files.

### Test generation
The grader is given probabilities $p_v$, $p_w$, and three numbers $MX_S$, $MN_W$ and $MX_W$.

For all test cases, $N = 512$ and $MX_S = 1024$. There are three types of networks:
- Complete: There is a cable between each pair of terminals.
- Hamiltonian: There is a sequence of terminals $a_1, a_2, \ldots, a_N$ such that there is a cable between terminals $a_i$ and $a_{i+1}$ for each valid $i$ and a cable between terminals $a_N$ and $a_1$. The number of cables in this network is approximately $N (N-1) / 5$.
- Special networks.

The stabilities are generated uniformly randomly between $1$ and $MX_S$ inclusive and the removal costs are generated uniformly randomly between $MN_W$ and $MX_W$ inclusive.

Whenever you remove a cable, the grader decides to modify the stability of some terminal with probability $p_v$, the cost of removing some cable with probability $p_w$, or to do nothing (with probability $1-p_v-p_w$). The stabilities and removal costs are changed using one of the following strategies:
- Pure Random:
    - Stabilities: Choose a terminal uniformly randomly and change its stability to a random integer between $1$ and $MX_S$.
    - Removal costs: Uniformly randomly choose a cable that has not been removed yet and change its removal cost to a random integer between $1$ and $MX_W$.
- Shrink:
    - Stabilities: Choose a terminal uniformly randomly and change its stability to a random number between $1$ and $MX_S$.
    - Removal costs: Let $c_0, c_1, \ldots, c_{m-1}$ be the cables that are still in the network, sorted first by their current removal costs and then by their indices. Generate a uniformly random number $d$ between $0$ and $99$ inclusive and choose a cable $c_r$ uniformly randomly. Let $X$ be the current cost of removing $c_r$.
        - If $2 \cdot r \le m$, then the new cost of removing cable $c_r$ will be $\mathrm{min}\,(X+d, MX_W)$.
        - Otherwise, the new cost of removing this cable will be $\mathrm{max}(X-d, 1)$.
- Adaptative:
    - Let $r$ be the index of the cable you just decided to remove.
    - Stabilities: Choose one of the terminals connected by $r$ uniformly randomly. Let $X$ denote the current stability of that terminal. Generate a uniformly random number $d$ between $0$ and $19$.
        - With probability $0.3$, the new stability of this terminal will be $\mathrm{min}\,(X+d, MX_S)$.
        - With probability $0.7$, the new stability of this terminal will be $\mathrm{max}\,(X-d, 1)$.
    - Removal costs: Let $c$ be the smallest index of a cable such that it has not been removed yet and its removal cost is greater or equal to the cost of removing cable $r$. If no such cable exists, then $c$ is the largest index of a cable with maximum removal cost (that has not been removed yet). Change the removal cost of cable $c$ to a uniformly random integer between $1$ and $MX_W$.

<table>
  <tr>
    <th>Network type</th>
    <th>p_v</th>
    <th>p_w</th>
    <th>MN_W</th>
    <th>MX_W</th>
  </tr>
  <tr>
    <td>Complete</td>
    <td>0.05</td>
    <td>0.05</td>
    <td>1</td>
    <td>2<sup>17</sup></td>
  </tr>
  <td>Complete</td>
    <td>0.4</td>
    <td>0.4</td>
    <td>1</td>
    <td>2<sup>17</sup></td>
  </tr>
  <tr>
    <td>Complete</td>
    <td>0.05</td>
    <td>0.05</td>
    <td>2<sup>16</sup></td>
    <td>2<sup>16</sup> + 100</td>
  </tr>
  <tr>
    <td>Hamiltonian</td>
    <td>0.05</td>
    <td>0.05</td>
    <td>1</td>
    <td>2<sup>17</sup></td>
  </tr>
  <td>Hamiltonian</td>
    <td>0.4</td>
    <td>0.4</td>
    <td>1</td>
    <td>2<sup>17</sup></td>
  </tr>
  <tr>
    <td>Special</td>
    <td>0.05</td>
    <td>0.05</td>
    <td>1</td>
    <td>2<sup>17</sup></td>
  </tr>
  <tr>
    <td>Special</td>
    <td>0.4</td>
    <td>0.4</td>
    <td>2<sup>16</sup></td>
    <td>2<sup>16</sup> + 100</td>
  </tr>
</table>

For each strategy and each row of this table (except the third strategy for row 7), there is a test file with the given parameters from the table and this strategy.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>