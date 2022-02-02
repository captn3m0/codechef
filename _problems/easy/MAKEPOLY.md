---
{"category_name":"easy","problem_code":"MAKEPOLY","problem_name":"1 - Make a convex polygon","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"isaf27","problem_tester":"","date_added":"7-08-2020","tags":{"0":"isaf27"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"","time":{"view_start_date":1607770800,"submit_start_date":1607770800,"visible_start_date":1607770800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MAKEPOLY","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Let's say that two nonzero vectors $\overrightarrow{v_1}=(x_1, y_1)$ and $\overrightarrow{v_2}=(x_2, y_2)$ have the same direction if there exists a positive constant $k > 0$ such that $\overrightarrow{v_1} = k \cdot \overrightarrow{v_2}$ (i.e., $x_1 = k \cdot x_2$ and $y_1 = k \cdot y_2$). Let's define the origin point $O$ to be $(0, 0)$. 

You are given $n$ non-zero vectors $\overrightarrow{v_1}, \overrightarrow{v_2}, \ldots, \overrightarrow{v_n}$ such that no pair of them have the same direction and all of their coordinates are integers. Your task is to find $n$ points $P_1, P_2, \ldots, P_n$ such that the following conditions are satisfied:

- All coordinates of $P_1, P_2, \ldots, P_n$ are integers.
- There exists a **strictly** convex polygon (i.e. it has positive area and no three vertices lie on the same line) with $n$ vertices $P_1, P_2, \ldots, P_n$ (in some order).
- For all $1 \leq i \leq n$, $P_i \neq O$ and the vectors $\overrightarrow{O P_i}$ and $\overrightarrow{v_i}$ have the same direction.

###Input:

The first line contains one integer $t$ - the number of test cases. The next lines describe test cases.

The first line of each test case contains one positive integer $n$ - the number of vectors.

The next $n$ lines of each test case contain two integers $x_i$, $y_i$ - coordinates of vector $\overrightarrow{v_i}=(x_i, y_i)$.

###Output:

For each test case print $n$ lines. The $i$-th of them should contain two integers $a_i$, $b_i$ ($|a_i|, |b_i| \leq 10^9$, $(a_i, b_i) \neq (0, 0)$) - coordinates of the point $P_i = (a_i, b_i)$.

All described conditions should be satisfied.

It can be shown that the answer under such constraints always exists. If there exist multiple answers you can print any.

###Constraints 

- $1 \leq t \leq 100$
- $3 \leq n \leq 5\,000$
- $(x_i, y_i) \neq (0, 0)$
- $|\overrightarrow{v_i}| \leq 50$
- For each test case, no pair of vectors have the same direction
- The sum of $n$ for all test cases does not exceed $200\,000$

###Subtasks

**Subtask #1 (30 points):**
- $n \leq 50$
- $|\overrightarrow{v_i}| \leq 5$

**Subtask #2 (70 points):** original constraints

###Sample Input:
    2
    4
    6 4
    6 9
    1 2
    6 3
    5
    1 0
    2 1
    -50 0
    0 -2
    0 50

###Sample Output:
    15 10
    10 15
    5 10
    10 5
    2 0
    2 1
    -2 0
    0 -2
    0 1
	
###EXPLANATION:

This picture describes a possible answer for the first test case:

<img src="https://s3.amazonaws.com/codechef_shared/download/Images/BENDSP02/MAKEPOLY/MAKEPOLY.png" alt="sample 1 picture" height="100%" width="100%">

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>