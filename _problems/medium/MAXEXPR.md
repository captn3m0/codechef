---
{"category_name":"medium","problem_code":"MAXEXPR","problem_name":"Maximize an Expression","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vladprog","problem_tester":null,"date_added":"14-06-2019","tags":{"0":"aug19","1":"cauchy","2":"math","3":"vijju123","4":"vladprog"},"problem_difficulty_level":"Medium","best_tag":"Cauchy Schwarz Inequality","editorial_url":"https://discuss.codechef.com/problems/MAXEXPR","time":{"view_start_date":1565602202,"submit_start_date":1565602202,"visible_start_date":1565602202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MAXEXPR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/AUG19/hindi/MAXEXPR.pdf), [Bengali](https://www.codechef.com/download/translated/AUG19/bengali/MAXEXPR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/AUG19/mandarin/MAXEXPR.pdf), [Russian](https://www.codechef.com/download/translated/AUG19/russian/MAXEXPR.pdf), and [Vietnamese](https://www.codechef.com/download/translated/AUG19/vietnamese/MAXEXPR.pdf) as well.

Chef had three sequences of real numbers $k_1, k_2, \ldots, k_N$, $c_1, c_2, \ldots, c_N$ and $x_1, x_2, \ldots, x_N$. Unfortunately, he lost the sequence $x$; the only thing he remembers about it is that
$$x_1 \cdot k_1 + x_2 \cdot k_2 + \ldots + x_N \cdot k_N = 0 \,.$$

Chef's favourite expression is
$$\sqrt{x_1+c_1} + \sqrt{x_2+c_2} + \ldots + \sqrt{x_N+c_N} \,.$$
Its value is defined only if $x_i+c_i \ge 0$ for each valid $i$. Let's denote the maximum value of this expression$ $ (over all sequences $x$ such that it is defined) by $F$.

Help Chef find $F$ and a sequence $x_1, x_2, \ldots, x_N$ such that the value of Chef's expression is $F$, or determine that there is no solution (the value of Chef's expression is always undefined).

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ real numbers $k_1, k_2, \ldots, k_N$.
- The third line contains $N$ real numbers $c_1, c_2, \ldots, c_N$.

All real numbers are given with exactly two digits after the decimal point.

### Output
For each test case, if there is no solution, print a single line containing one integer $-1$. Otherwise, print a single line containing $N+1$ space-separated real numbers $F, x_1, x_2, \ldots, x_N$.

It can be proved that if a solution exists, then it is unique. Your answer will be considered correct if the absolute or relative error of each number on the output does not exceed $10^{−2}$.

### Constraints 
- $1 \le T \le 10^5$
- $2 \le N \le 10^5$
- $0 \lt k_i \le 2,000$ for each valid $i$
- $|c_i| \le 2,000$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^5$

### Subtasks
**Subtask #1 (15 points):** $N = 2$

**Subtask #2 (15 points):** $k_i = 1$ and $c_i = 0$ for each valid $i$

**Subtask #3 (15 points):** $k_i = 1$ for each valid $i$

**Subtask #4 (15 points):** $c_i = 0$ for each valid $i$

**Subtask #5 (40 points):** original constraints

### Example Input
```
5
4
1.00 2.00 3.00 4.00
5.00 6.00 7.00 8.00
3
1.23 8.90 5.67
-2.34 -9.01 -6.78
3
1.00 1.00 1.00
1.23 8.90 -5.67
2
1.23 8.90
-5.67 2.34
2
1.23 8.90
5.67 -2.34
```

### Example Output
```
12.0761472885 28.6000000000 2.4000000000 -3.2666666667 -5.9000000000
-1
3.6578682316 0.2566666667 -7.4133333333 7.1566666667
3.5802375027 15.5642936942 -2.1510203645
-1
```

### Explanation
**Example case 1:** The optimal solution is $x = (28.6, 2.4, -49/15, -5.9)$. Then, $x_1 \cdot k_1 + x_2 \cdot k_2 + x_3 \cdot k_3 + x_4 \cdot k_4 = 28.6 \cdot 1 + 2.4 \cdot 2 - 49 \cdot 3 / 15 + (-5.9) \cdot 4 = 0$, and $F = \sqrt{28.6+5}+\sqrt{2.4+6}+\sqrt{-49/15+7}+\sqrt{-5.9+8} \doteq 12.076$. This is the maximum value of Chef's expression.

**Example case 2:** For each $i$, $c_i$ is negative, but $x_i+c_i$ must be non-negative, so $x_i$ must be positive. However, all $k_i$ are also positive, so $x_1 k_1 + x_2 k_2 + \ldots + x_N k_N$ cannot be $0$. There is no solution.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>