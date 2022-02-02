---
{"category_name":"medium","problem_code":"SIMARRAY","problem_name":"Similar Arrays","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sundar1995","problem_tester":"","date_added":"27-05-2021","tags":{"0":"ltime96","1":"math","2":"medium","3":"optimization","4":"sundar1995"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SIMARRAY","time":{"view_start_date":1622482204,"submit_start_date":1622482204,"visible_start_date":1622482204,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SIMARRAY","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/LTIME96/bengali/SIMARRAY.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME96/mandarin/SIMARRAY.pdf), [Russian](https://www.codechef.com/download/translated/LTIME96/russian/SIMARRAY.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME96/vietnamese/SIMARRAY.pdf) as well.

You are given two arrays of positive integers, $A$ and $B$, both of length $N$. You must choose a sequence of $N$ **non-increasing** real numbers $R_1, R_2, \ldots R_N$ to multiply with $B_1, B_2, \ldots B_N$ respectively, such that the sum of the squares of their differences with corresponding terms $A_1, A_2, \ldots A_N$ is minimized.

Formally, find the minimum possible value of $\displaystyle \sum_{i=1}^{N} (A_i - R_i B_i)^2$, over all possible $N$-tuples of real numbers $R = (R_1, R_2, \ldots R_N)$ satisfying $R_1 \ge R_2 \ge \cdots \ge R_N$

###Input

- The first line contains an integer $T$, the number of test cases. Then the test cases follow. 
- The first line of each test case contains an integer $N$, the length of arrays $A$ and $B$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots A_N$.
- The third line contains $N$ space-separated integers $B_1, B_2, \ldots B_N$.

###Output
For each test case, print the minimum possible value of the objective as described in the statement.

Your answer is considered correct if its absolute or relative error does not exceed $10^{−6}$.

###Constraints 
- $2\le N\le 5\cdot 10^5$
- The sum of $N$ over all test cases doesn't exceed $5 \cdot 10^5$
- $1 \le A_i, B_i \le 1000$ for each valid $i$.

###Subtasks

- **Subtask 1 (5 points):** $T = 1, N = 2$.
- **Subtask 2 (11 points):** The sum of $N$ over all test cases doesn't exceed $20$.
- **Subtask 3 (13 points):** The sum of $N$ over all test cases doesn't exceed $300$.
- **Subtask 4 (14 points):** The sum of $N$ over all test cases doesn't exceed $2000$.
- **Subtask 5 (20 points):** The sum of $N$ over all test cases doesn't exceed $7000$.
- **Subtask 6 (37 points):** No additional constraints


###Sample Input
```
3
2
2 5
1 8
5
7 9 1 4 3
9 8 6 13 1
10
66 23 51 81 60 7 26 127 66 8
9 88 77 12 2 38 7 63 90 111
```

###Sample Output
```
0.000000000000000
12.247238031469687
17698.696831405897683
```

###Explanation
In the first test case, we choose $R_1 = 2$ and $R_2 = 0.625$

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>