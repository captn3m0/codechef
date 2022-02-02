---
{"category_name":"easy","problem_code":"CIRCHAOS","problem_name":"Circle of Chaos","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5\r\n4 1\r\n5\r\n6 2\r\n2 4\r\n1 4\r\n7 16 8 29\r\n1000000000 1\r\n998244353\r\n1 1\r\n20201220","output":"3\r\n4\r\n0\r\n1755647\r\n0","explanation":"**Example case 1:** The initial state is shown in the figure from the statement. We can first use spell $1$ and kill the $5$-th sorcerer to our left, i.e. sorcerer $2$. Now there are $3$ living sorcerers and the state is as shown in the following figure:\r\n\r\n\u003Cimg src=\u0022https://espresso.codeforces.com/ee3ab039ff91b3620071b9c2638c09bf39befbeb.png\u0022 width=\u0022500\u0022 height=\u0022320\u0022\u003E\r\n\r\nWe can use spell $1$ again and kill the current $5$-th living sorcerer to our left, i.e. sorcerer $4$. Now there are $2$ living sorcerers and the state is:\r\n\r\n\u003Cimg src=\u0022https://espresso.codeforces.com/81c166a5d9973e7ffc27d44b0cbaf62862f4601e.png\u0022 width=\u0022500\u0022 height=\u0022350\u0022\u003E\r\n\r\nFinally, we can use spell $1$ again and kill the only other living sorcerer, i.e. sorcerer $3$. Now, none of the other sorcerers are alive. As we cannot cast a spell to kill ourselves, we cannot improve the answer any further.\r\n\r\n**Example case 2:** We can perform $4$ operations using the spell $p_1 = 2$ each time. We can also instead use $p_2 = 4$ in the first two operations and $p_1 = 2$ in the last two operations. Note that there may be multiple valid sequences of operations that lead to the best answer.\r\n\r\n**Example case 3:** We cannot perform any operations using any of the given spells, so we are unable to kill any sorcerers.\r\n\r\n**Example case 4:** We can perform $1,755,647$ operations, each of them using the spell $p_1 = 998,244,353$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/7879I2aLmmA","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"explodingfrz","problem_tester":"","date_added":"14-12-2020","tags":{"0":"cook125","1":"easy","2":"explodingfrz","3":"greatest","4":"rajarshi_basu"},"problem_difficulty_level":"Easy","best_tag":"Greatest Common Divisor","editorial_url":"https://discuss.codechef.com/problems/CIRCHAOS","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CIRCHAOS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK125/hindi/CIRCHAOS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK125/mandarin/CIRCHAOS.pdf), [Russian](https://www.codechef.com/download/translated/COOK125/russian/CIRCHAOS.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK125/vietnamese/CIRCHAOS.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK125/bengali/CIRCHAOS.pdf) as well.

You are an evil sorcerer at a round table with $N$ sorcerers (including yourself). You can cast $M$ spells which have distinct powers $p_1, p_2, \ldots, p_M$.

You may perform the following operation any number of times (possibly zero):
- Assign a living sorcerer to each positive integer cyclically to your left starting from yourself ― the closest living sorcerer to your left is assigned to $1$, the next living sorcerer to the left is assigned to $2$ and so on. Note that each living sorcerer (including yourself) is assigned to an infinite number of integers.
- Choose a spell $j$ (possibly a spell you have chosen before) and kill the living sorcerer assigned to $p_j$. You may not cast a spell to kill yourself. 

<img src="https://espresso.codeforces.com/20b6b7668ca643ec5ddb649bb01a150852acf3a9.png" width="500" height="300">

What is the maximum number of sorcerers you can kill using zero or more operations?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- The second line contains $M$ space-separated integers $p_1, p_2, \ldots, p_M$.

### Output
For each test case, print a single line containing one integer ― the maximum number of sorcerers you can kill.

### Constraints
- $1 \le T \le 1,000$
- $1 \le N \le 10^9$
- $1 \le M \le 3 \cdot 10^5$
- $1 \le p_i \le 10^9$ for each valid $i$
- $p_1, p_2, \ldots, p_N$ are pairwise distinct
- the sum of $M$ over all test cases does not exceed $3 \cdot 10^5$

### Example Input
```
5
4 1
5
6 2
2 4
1 4
7 16 8 29
1000000000 1
998244353
1 1
20201220
```

### Example Output
```
3
4
0
1755647
0
```

### Explanation
**Example case 1:** The initial state is shown in the figure from the statement. We can first use spell $1$ and kill the $5$-th sorcerer to our left, i.e. sorcerer $2$. Now there are $3$ living sorcerers and the state is as shown in the following figure:

<img src="https://espresso.codeforces.com/ee3ab039ff91b3620071b9c2638c09bf39befbeb.png" width="500" height="320">

We can use spell $1$ again and kill the current $5$-th living sorcerer to our left, i.e. sorcerer $4$. Now there are $2$ living sorcerers and the state is:

<img src="https://espresso.codeforces.com/81c166a5d9973e7ffc27d44b0cbaf62862f4601e.png" width="500" height="350">

Finally, we can use spell $1$ again and kill the only other living sorcerer, i.e. sorcerer $3$. Now, none of the other sorcerers are alive. As we cannot cast a spell to kill ourselves, we cannot improve the answer any further.

**Example case 2:** We can perform $4$ operations using the spell $p_1 = 2$ each time. We can also instead use $p_2 = 4$ in the first two operations and $p_1 = 2$ in the last two operations. Note that there may be multiple valid sequences of operations that lead to the best answer.

**Example case 3:** We cannot perform any operations using any of the given spells, so we are unable to kill any sorcerers.

**Example case 4:** We can perform $1,755,647$ operations, each of them using the spell $p_1 = 998,244,353$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>