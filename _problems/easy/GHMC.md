---
{"category_name":"easy","problem_code":"GHMC","problem_name":"GukiZ Has More Candies","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"allllekssssa","problem_tester":null,"date_added":"24-08-2018","tags":{"0":"allllekssssa","1":"greedy","2":"ltime63"},"editorial_url":"https://discuss.codechef.com/problems/GHMC","time":{"view_start_date":1535216402,"submit_start_date":1535216402,"visible_start_date":1535216402,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/LTIME63/mandarin/GHMC.pdf" target="_blank">Mandarin chinese</a>
, <a href="http://www.codechef.com/download/translated/LTIME63/russian/GHMC.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/LTIME63/vietnamese/GHMC.pdf" target="_blank">Vietnamese</a> as well.</h3>


After six days, professor GukiZ decided to give more candies to his students. Like last time, he has $N$ students, numbered $1$ through $N$. Let's denote the number of candies GukiZ gave to the $i$-th student by $p_i$. As GukiZ has a lot of students, he does not remember all the exact numbers of candies he gave to the students. He only remembers the following properties of the sequence $p$:
- The numbers of candies given to each of the first $K$ students ($p_1, p_2, \dots, p_K$) are known exactly.
- All elements of the sequence $p$ are distinct and positive.
- GukiZ didn't give more than $x$ candies to any student (the maximum value in the sequence $p$ is not greater than $x$).
- For each student $i$, there is at least one other student $j$ such that $|p_i - p_j| \le D$.
- The professor gave out the biggest possible total number of candies, i.e. $S = p_1 + p_2 + p_3 + \ldots + p_N$ is maximum possible.

GukiZ would like to know the total number of candies $S$ he had at the beginning. However, times change and after six days, the professor is really tired, so it is possible that there is no sequence $p$ which satisfies the constraints. Can you help GukiZ find the number of candies he gave out, or tell him that he must have made a mistake?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains four space-separated integers $N$, $K$, $x$, $D$.
- The second line contains $K$ distinct space-separated integers $p_1, p_2, \dots, p_K$.

### Output
For each test case, print a single line containing one integer — the number of candies GukiZ had, or $-1$ if there is no valid sequence $p$.

### Constraints
- $1 \le T \le 50$
- $3 \le N \le 10^9$
- $1 \le K \le \mathrm{min}(N, 2 \cdot 10^4)$ 
- $1 \le x \le 2 \cdot 10^9$
- $1 \le D \le 10^9$
- $1 \le p_i \le x$ for each valid $i$
- All values $p_i$ from input are distinct
### Subtasks
**Subtask #1 (15 points):** $1 \leq x, N, D \leq 15$ 

**Subtask #2 (35 points):** $1 \leq x, N, D \leq 10^5$ 

**Subtask #3 (50 points):** original constraints


### Example Input
```
2
4 3 5 3
2 1 5
3 2 8 2
3 8
```

### Example Output
```
12
-1
```

### Explanation
**Example case 1:** There are four students. We know that the first student got $p_1 = 2$ candies, the second student got $p_2 = 1$ and the third got $p_3 = 5$ candies; we don't know the number of candies given to the last student. The maximum possible amount of candies given to some student is $x=5$. The best possible option is giving $p_4=4$ candies to the last student. Then, the fourth constraint (with $D=3$) is satisfied for all students. Only the pair of students $(2, 3)$ have numbers of candies that differ by more than $3$, but still, for each student, there are at least two other students with close enough numbers of candies.

**Example case 2:** GukiZ made some mistake in distribution and there is no valid sequence $p$. The answer is $-1$.
