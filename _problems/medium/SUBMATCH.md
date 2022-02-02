---
{"category_name":"medium","problem_code":"SUBMATCH","problem_name":"Substring Matching","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"jtnydv25","problem_tester":null,"date_added":"1-12-2019","tags":{"0":"jtnydv25"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"","time":{"view_start_date":1575801000,"submit_start_date":1575801000,"visible_start_date":1575801000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SUBMATCH","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You are given a string $T$ and $n$ (not necessarily distinct) strings $S_1, S_2, \ldots, S_n$. What is the maximum length of a substring of $T$ that can be formed by choosing some strings from $S_1, S_2, \ldots, S_n$, and concatenating them in some non decreasing order of length. Please note that there might be multiple non decreasing orders possible.

Formally,

Consider all the strings $Y$ that can be obtained as follows:

Initialize $Y$ as empty string, $L = 0$, $X = \{1, 2, \ldots, n\}$. Choose $0 \leq t \leq n$.

Repeat the following procedure $t$ times:

- Choose an index $i \in X$ such that $|S_i| \geq L$. 
- Add $S_i$ to the end of $Y$.
- Replace $L$ by $|S_i|$
- Remove $i$ from $X$.

What is the length of the longest substring of $T$ that can be formed in this way?

###Input:

- First line will contain $Q$, number of testcases. Then the testcases follow. 
- The first line of each testcase contains the string $T$.
- The second line of each testcase contains $n$.
- $i$-th of the next $n$ lines contain the string $S_i$

###Output:
For each testcase, output the length of the longest substring of $T$ that can be formed in the way described. If there is no non empty substring of $T$ that can be formed, print 0.

###Constraints 
- $1 \leq Q \leq 10^4$
- $1 \leq n, |S_i|$
- All strings in the input consist of lowercase english letters only.
- The sum of lengths of all the strings in the input doesn't exceed $10^5$.

###Sample Input:
    3
    abcdefg
    4
    a
    b
    ef 
    bcd
    abcdefg
    4
    a
    de
    fg
    bc
    aaa
    2
    a
    a

###Sample Output:
    4
    7
    2

###EXPLANATION:
In the first testcase, we can choose the strings `a` and `bcd` and concatenate to get the string `abcd`.

In the second testcase, you can choose all the strings and concatenate them in the order `a`, `bc`, `de` and `fg` to get `abcdefg`.

In the third testcase choose both the strings `a` and `a` to get `aa`. Note that one string can be used only once, and hence we can't form `aaa`.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>