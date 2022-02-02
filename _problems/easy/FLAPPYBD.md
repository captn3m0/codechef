---
{"category_name":"easy","problem_code":"FLAPPYBD","problem_name":"Flappy Bird","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/Va9Z4LDcc5Q","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"iscsi","date_added":"17-06-2021","tags":{"0":"binary","1":"daanish_adm","2":"easy","3":"greedy","4":"observation","5":"start5","6":"vichitr"},"problem_difficulty_level":"Easy","best_tag":"Binary Search","editorial_url":"https://discuss.codechef.com/problems/FLAPPYBD","time":{"view_start_date":1624800600,"submit_start_date":1624800600,"visible_start_date":1624800600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=FLAPPYBD","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Mandarin Chinese](https://www.codechef.com/download/translated/START5/mandarin/FLAPPYBD.pdf), [Russian](https://www.codechef.com/download/translated/START5/russian/FLAPPYBD.pdf), and [Vietnamese](https://www.codechef.com/download/translated/START5/vietnamese/FLAPPYBD.pdf) as well.

Chef is playing a noob version of the game Flappy Bird with the following rules:
- The bird starts at a height $H$ at $x = 0$.
- There are $N$ obstacles (numbered $1$ through $N$). For each valid $i$, the $i$-th obstacle is at a position $x_i$ and it has a height $h_i$.
- For each integer $i$ ($0 \le i \lt x_N$), Chef has the option to click once when the bird is at $x = i$. Let's denote the bird's height ($y$-coordinate) at that point by $j$. If he clicks, the bird moves to $x = i+1$ and $y = j+1$. Otherwise, the bird moves to $x = i+1$ and $y = j-1$.
- There is no ceiling and all the obstacles extend upwards from the bottom and not the other way around.
- For each valid $i$, the bird crosses the $i$-th obstacle successfully if the bird's height at $x = x_i$ is strictly greater than $h_i$.
- At any point before $x = x_N$, the bird's height should remain non-negative, otherwise it will drown.
- If the bird crosses the $N$-th obstacle successfully, Chef wins the game.

Can you tell Chef if he can win the game (get the bird to cross all the obstacles) and the minimum number of clicks required to win in such a case?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $H$.
- The second line contains $N$ space-separated integers $x_1, x_2, \ldots, x_N$.
- The third line contains $N$ space-separated integers $h_1, h_2, \ldots, h_N$.

### Output
For each test case, print a single line containing one integer — the minimum number of clicks required to cross all the obstacles successfully, or $-1$ if it is impossible to cross all the obstacles.

### Constraints
- $1 \leq T \leq 3 \cdot 10^4$
- $1 \leq N \leq 10^5$
- $0 \leq H \leq 10^9$
- $1 \leq x_1 \lt x_2 \lt \ldots \lt x_N \leq 10^9$
- $1 \leq h_i \leq 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^5$

### Example Input
```
3
1 0
2
1
2 1
1 3
1 1
5 10
1 2 3 4 5
10 11 12 13 15
```

### Example Output
```
2
2
-1
```	

### Explanation
**Example case 2:** The figure below shows one possible way to successfully cross all the obstacles using the minimum number of clicks.

<img src="https://s3.amazonaws.com/codechef_shared/download/Images/DAANISH/1+(3).png" width=550 height=450 />

**Example case 3:** It is clear that even by clicking all the time, it is impossible to cross the last obstacle.

<img src="https://s3.amazonaws.com/codechef_shared/download/Images/DAANISH/1+(5).png" width=550 height=450 />

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>