---
{"category_name":"easy","problem_code":"INTMST","problem_name":"Interactive MST","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"jtnydv25","problem_tester":"","date_added":"27-05-2021","tags":{"0":"bridges","1":"interactive","2":"jtnydv25","3":"ltime96","4":"minimum"},"problem_difficulty_level":"Unavailable","best_tag":"Minimum Spanning Tree","editorial_url":"https://discuss.codechef.com/problems/INTMST","time":{"view_start_date":1622482204,"submit_start_date":1622482204,"visible_start_date":1622482204,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=INTMST","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/LTIME96/bengali/INTMST.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME96/mandarin/INTMST.pdf), [Russian](https://www.codechef.com/download/translated/LTIME96/russian/INTMST.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME96/vietnamese/INTMST.pdf) as well.

There is a hidden **undirected connected** graph $G$ with $n$ nodes and $m$ edges numbered $0, 1, \ldots m - 1$, and a hidden permutation $p_0, p_1, \ldots, p_{m-1}$ of edges. The graph doesn't contain any self loops or multiple edges.

You only know the value of $n$ and $m$. You can ask queries. In one query, you give the judge a vector $w = [w_0, w_1, \ldots, w_{m-1}]$ of size $m$ consisting of integers in the range $[1, m]$. The judge returns $n - 1$ integers $e_0, e_1, \ldots, e_{n-2}$, such that the edges numbered $e_0, e_1, \ldots, e_{n-2}$ form a minimum spanning tree of the graph, if the edge numbered $p_i$ had a weight $w_i$ for each $i = 0, 1, \ldots m - 1$. Note that the judge can print the edges in any order, and if there are multiple minimum spanning trees, the judge may print any one of them.

You need to find the hidden permutation in at most $m$ queries, or claim that it can't be found uniquely no matter how many queries you're allowed to make.

We have a proof that if it's possible to find the permutation in finitely many queries, then it is possible in at most $m$ queries.

###Interaction

- First, you should read a line containing the subtask number ($1$, $2$, or $3$).
- Then, read the number of test cases.
- For each test case, first read the values of $n$ and $m$.
- To make a query, you should output a question mark, followed by $m$ space-separated integers denoting the weights:  **$? \enspace w_0 \enspace w_1 \enspace \ldots \enspace w_{m-1}$**.
- If the query format is incorrect, or if some weight exceeds $m$, or the number of queries (including this query) has exceeded $m$, the judge prints a single integer $-1$ and quits with a wrong answer verdict. In this case, you must also terminate your program.
- Otherwise, the judge prints $n - 1$ space-separated integers : **$e_0 \enspace e_1 \enspace \ldots \enspace e_{n-2}$**.
- If you have found the permutation $p$, you should output an exclamation mark followed by $m$ space-separated integers :  **$! \enspace p_0 \enspace p_1 \enspace \ldots \enspace p_{m-1}$**. Else, if you have reached the conclusion that the hidden permutation $p$ can not be found, print exclamation mark followed by $-1$ : **$ ! \enspace -1$**.
- If your answer is incorrect, the judge prints**$-1$** and exits. In this case, you must terminate your program as well. Else, the judge prints **$1$**, and you should move to the next testcase(if any).

Note that whenever the judge prints $−1$, you should immediately terminate your program to receive a Wrong Answer verdict; otherwise, you may receive any verdict. Don't forget to flush the output after printing each line!


###Constraints 
- $1 \le m\le 1000$
- The sum of $m$ over all test cases doesn't exceed $1000$.

###Subtasks
- **Subtask 1(8 points)** : $G$ is a tree
- **Subtask 2(21 points)** : $G$ is a cycle
- **Subtask 3(71 points)** : No additional constraints.

###Example
In this example, the hidden graph has edges $(0, 1)$, $(1, 2)$ and $(2, 0)$ numbered $0, 1, 2$ respectively, in all testcases. In the first testcase, $p = [2, 0, 1]$ and in the second, $p = [0, 1, 2]$. The third testcase shouldn't be read as the judge prints $-1$ in testcase $2$.

```
You                     Grader
                        2           # Subtask 2
                        3           # 3 testcases
                        3 3         # n = 3, m = 3
? 2 3 2
                        2 1         # The permuted weights would be [3, 2, 2]
? 2 3 2
                        1 2         # For the  same vector w, judge's output can be different.
! 2 0 1
                        1           # Correct output. Note that this is merely a lucky guess

                        3 3         # Next testcase, n = 3, m = 3
? 2 2 1
                        0 2
! 1 0 2
                        -1          # Incorrect output! Judge exits now.
You should also
terminate here.

```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>