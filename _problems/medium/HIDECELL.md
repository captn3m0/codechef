---
{"category_name":"medium","problem_code":"HIDECELL","problem_name":"Hidden Cell","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"jtnydv25","problem_tester":"","date_added":"16-06-2021","tags":{"0":"interactive","1":"jtnydv25","2":"ltime97","3":"medium"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/HIDECELL","time":{"view_start_date":1624727702,"submit_start_date":1624727702,"visible_start_date":1624727702,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=HIDECELL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Mandarin](https://www.codechef.com/download/translated/LTIME97/mandarin/HIDECELL.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME97/bengali/HIDECELL.pdf), [Russian](https://www.codechef.com/download/translated/LTIME97/russian/HIDECELL.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME97/vietnamese/HIDECELL.pdf) as well.

There is an $N \times N$ matrix. Let $(i, j)$ denote the cell in the $i$-th row and the $j$-th column, where the rows are numbered $0, 1, \ldots, N - 1$ from top to bottom and the columns are numbered $0, 1, \ldots N-1$ from left to right. There is a hidden cell $(a, b)$. It  is known that this cell doesn't lie on the boundary of the matrix. That is, $\min(a, b) \geq 1$ and $\max(a, b) < N - 1$.

Your task is to recover the hidden cell. You can ask queries, in which you give the judge a matrix $M$ of size $N \times N$, consisting of zeroes and ones. Let's call a cell $(i, j)$ *valid* if $(i, j) = (a, b)$ or $M_{i,j} = 1$. The judge replies whether there exists a path from $(0, 0)$ to $(N - 1, N - 1)$ consisting of only valid cells, moving only down and right.

Formally, it tells whether there exits a sequence of $2N - 1$ cells $(0 = u_0, 0 = v_0), (u_1, v_1), \ldots, (N - 1 = u_{2N-2}, N - 1 = v_{2N-2})$, such that $(u_i, v_i)$ is a valid cell for all $i$ and either $(u_{i + 1} = u_i, v_{i + 1} = v_i + 1)$ or $(u_{i + 1} = u_i + 1, v_{i + 1} = v_i)$.

The score of your submission is a function of the number of queries asked. Please refer to the scoring section for more details.

Note that the grader is **not** adaptive, which means that the hidden cell is fixed in the beginning and won't change according to the queries you ask.

###Input

- First, you should read a single integer $T$, the number of test cases.
- For each test case, first read the value of $N$.
- To make a query, you should first print `?` on a new line. Then you should print $N$ lines each containing a string of $N$ characters denoting the matrix $M$.
- If the query format is incorrect (i.e. if the matrix doesn't have dimensions $N \times N$ or if some character in the matrix is not $0$ or $1$), or if you have asked more than $120$ queries, the judge prints `-1`, and exits with a wrong answer verdict. In this case, you must also terminate your program.
- Once you know the hidden cell, print a character `!` on a new line. In the next line, print two space-separated integers $a$ and $b$, the row and column numbers of the hidden cell respectively.
- If your answer is incorrect, the judge prints `-1` and exits  with a Wrong Answer verdict. In this case, you must terminate your program as well. Otherwise, **the judge prints `1`**, and you should move to the next test case (if any).

Note that whenever the judge prints `−1`, you should immediately terminate your program to receive a Wrong Answer verdict; otherwise, you may receive any verdict. Don't forget to flush the output after printing each line!

### Test Data and Scoring
Each test file has exactly $50$ test cases all with $N = 50$.

Let $Q$ be the maximum number of queries asked by you over all the test cases of all the test files.

- If $Q > 120$, you get $0$ points.
- If $61 \le Q \le 120$, you get $9$ points.
- If $51 \le Q \le 60$, you get $24$ points.
- If $Q \le 50$, you get $54 + \left \lfloor \dfrac{46 \times (50 - \max(Q, 14))}{36} \right \rfloor$ points, where $\lfloor x \rfloor$ denotes the largest integer $\le x$.  In particular, you get $54$ points if $Q = 50$ and $100$ points if $Q \le 14$. 


### Interaction Example

```
You                     Grader
                        3           # 3 test cases
                        4           # N = 4
?
1100
0100
0001
1111
                        1           # The judge tells that there is
                                    # a valid path.
!
2 1

                        1           # Correct answer! 

                        4           # Next test case, N = 4

?
1000
0000
0010
0001
                        0           # There doesn't exist a path
!
2 2
                        -1          # Incorrect output! Judge exits
You should also
terminate here
without reading
the next test case
```

### Explanation

Please note that a small value of $T, N$ is used for explanation purposes. In all the actual tests, $T = 50, N = 50$.

In the first example, $(2, 1)$ is the hidden cell. You ask the query:

```
1100
0100
0001
1111

```
The path $(0, 0) \to (0, 1) \to (1, 1) \to (2, 1) \to (3, 1) \to (3, 2) \to (3, 3)$ consists of only valid cells and the judge replies with $1$.

In the second test case, the hidden cell is $(1, 1)$. When you ask the query
```
1000
0000
0010
0001
```
Only all the diagonal cells are valid. There is no path from $(0, 0)$ to $(3, 3)$ passing only through valid cells, so the judge replies with $0$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>