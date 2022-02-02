---
{"category_name":"medium","problem_code":"MOBCNT","problem_name":"Counting Mobiles","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"jtnydv25","problem_tester":null,"date_added":"24-12-2019","tags":{"0":"jtnydv25"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"","time":{"view_start_date":1577730600,"submit_start_date":1577730600,"visible_start_date":1577730600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MOBCNT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
A **mobile** is a rooted tree with weighted leaves that satisfies the following property: each non-leaf vertex $v$ has exactly two children $L(v)$ and $R(v)$, and the total weight of leaves in the subtree of $L(v)$ is equal to the total weight of leaves in the subtree of $R(v)$.

We have $n$ positive integer weights $a_1, \ldots, a_n$. You have to count the number of **suitable** mobiles. A mobile is **suitable** if the multiset of weights in its leaves is equal to the multiset $\{a_1, \ldots, a_n\}$. Two mobiles are considered different if they are not **equal**. Two mobiles $T_1$ and $T_2$ are **equal** in one of two cases:

- $T_1$ and $T_2$ each consist of a single leaf vertex, and the leaves' weights are equal;
- Respective roots $r_1$ and $r_2$ of $T_1$ and $T_2$ are both not leaves, and subtrees of $L(r_1)$ and $L(r_2)$ are equal mobiles, as well as subtrees of $R(r_1)$ and $R(r_2)$.
Since the answer can be large, print it modulo $10^9 + 7$.

###Input:
- The first line contains a single integer $T$, the number of test cases. $T$ test case descriptions follow.
- Each test case description starts with a line containing a single integer $n$, the number of weights. The next line contains $n$ integers $a_1, \ldots, a_n$ .

###Output:
Print answers for each test case in a new line, in the order of appearance in the input. For each test case print a single integer, the number of different suitable mobiles modulo $10^9 + 7$.

###Constraints:
- $1 \leq T \leq 10^5$
- $1 \leq n \leq 10^5$
- $1 \leq a_i \leq 10^9$
- The sum of all $n$ does not exceed $5 \cdot 10^5$.

###Sample Input:
    5
    1
    7
    3
    1 1 2
    4
    3 3 3 3
    4
    5 5 10 20
    3
    1 2 3

###Sample Output:
    1
    2
    1
    4
    0
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>