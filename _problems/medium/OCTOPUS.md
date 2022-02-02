---
{"category_name":"medium","problem_code":"OCTOPUS","problem_name":"5 - Ideal octopuses","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"isaf27","problem_tester":"","date_added":"7-08-2020","tags":{"0":"isaf27"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"","time":{"view_start_date":1607770800,"submit_start_date":1607770800,"visible_start_date":1607770800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=OCTOPUS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are given a rooted tree with $n$ vertices and root vertex $1$. Each other vertex $2 \leq i \leq n$ has parent vertex $1 \leq p_i < i$.

Define a **descending path** starting at the vertex $v$ as a sequence of $k \geq 2$ vertices $v=v_1, v_2, \ldots, v_k$ where for all $1 \leq i \leq k - 1$, the vertex $v_i$ is the parent of $v_{i+1}$. Define the **length** of such a path as $k - 1$.

Let's define an **octopus** with root $v$ as the union of any non-negative number of descending paths starting at the vertex $v$, where each pair of such paths only has $v$ in common. It is possible that an octopus contains no paths; in such case, the octopus consists of only one vertex $v$.

Let's call an octopus with root $v$ **ideal** if the **bitwise XOR** of the lengths of all the descending paths starting at $v$ it contains is equal to $0$. If the number of paths is equal to $0$, the XOR is defined as $0$.

Find the number of ideal octopuses with root $v$ for all vertices $v$ of the tree. Two octopuses are considered different if the sets of vertices that they contain are different. As these numbers can be very large, you should find their remainders modulo $998\,244\,353$.

###Input:

The first line contains one integer $t$ - the number of test cases. The next $2t$ lines describe test cases.

The first line of each test case contains one integer $n$ - the number of vertices in the tree.

The second line  of each test case contains $n-1$ integers $p_2, p_3, \ldots, p_n$ - the parent vertices for each of $i\in [2,n]$.

###Output:

For each test case print $n$ integers. The $i$-th of them should be the remainder of the number of ideal octopuses with vertex $i$ as the root modulo $998\,244\,353$.

###Constraints 

- $1 \leq t \leq 10^5$
- $2 \leq n \leq 500\,000$
- $1 \leq p_i < i$ for all $2 \leq i \leq n$
- the sum of $n$ for all test cases does not exceed $10^6$

###Subtasks

**Subtask #1 (15 points):**
- $t \leq 100$
- $n \leq 16$

**Subtask #2 (30 points):**
- $n \leq 2000$
- the sum of $n$ for all test cases does not exceed $10^5$

**Subtask #3 (55 points):** original constraints

###Sample Input:
    2
    5
    1 1 1 1
    18
    1 2 2 1 5 5 5 7 7 8 11 8 13 1 15 16 17

###Sample Output:
    8 1 1 1 1 
    38 2 1 1 12 1 2 3 1 1 1 1 1 1 1 1 1 1 

	
###EXPLANATION:

In the first test case, for each vertex from $2$ to $5$, there exists only one octopus with it as the root, and that octopus is ideal. For vertex $1$, the number of ideal octopuses with vertex $1$ as the root is equal to the number of subsets of $\{2, 3, 4, 5\}$ with even size, which is equal to $8$.

The picture of the tree in the second test case:

<img src="https://s3.amazonaws.com/codechef_shared/download/Images/BENDSP02/OCTOPUS/OCTOPUS.png" alt="sample 2 picture" height="100%" width="100%">

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>