---
{"category_name":"medium","problem_code":"CLUNQUE","problem_name":"Unique Substring","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"aman_robotics","problem_tester":"","date_added":"10-07-2020","tags":{"0":"aman_robotics","1":"cole2020","2":"longest","3":"medium","4":"segment","5":"suffix"},"problem_difficulty_level":"Medium","best_tag":"Segment Tree","editorial_url":"https://discuss.codechef.com/problems/CLUNQUE","time":{"view_start_date":1594838700,"submit_start_date":1594838700,"visible_start_date":1594838700,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CLUNQUE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Well, before Chef could counter attack, Dr Doof showed his innocent face which moved Chef. Moreover, on hearing his complete story, Chef took pity on him and decided to befriend him. He even decided to play a game with him. The game goes as follows:

Chef gives Dr Doof a string $S$ of length $N$ consisting only of lowercase Latin letters and asks him to study the string carefully.

A substring of a string is a contiguous subsequence of that string. We denote the substring of string $S$ starting from the $l^{\text{th}}$ character and ending with the $r^{\text{th}}$ character as $S[l, r]$. So, strings *chef* and *odech* are substrings of string *codechef*, but string *codee* is not. 

Chef defines a substring to be **unique** if it occurs in the whole string $S$ exactly once.

After Dr Doof studies the string, Chef asks him $Q$ queries of the form - $L$ $R$ $K$.

For each query, you have to find the lexicographically smallest **unique** substring of length atleast $K$ in $[L, R]$, or say that there is no **unique** substring in this range. Formally, the answer to each query is two integers $l$ and $r$ such that:
1. $L \leq l \leq r \leq R$
2. $r - l + 1 \geq K$
3. $S[l, r]$ is the lexicographically smallest **unique** substring satisfying conditions $1$ and $2$.

String $p$ is lexicographically smaller than string $q$, if $p$ is a prefix of $q$ not equal to $q$ or there exists an index $i$, such that $p_{i}$ < $q_{i}$ and for all $j < i, p_{j} = q_{j}$. For example, *abc* is lexicographically smaller than *abcd* , *abd* is lexicographically smaller than *abec*.

This time, you have to help the poor Dr Doof answer the queries as he doesn't want to lose his new friend. If there is no **unique** substring $S[l, r]$ satisfying the above conditions, print two space separated integers: $-1$ $-1$.

###Input:

- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains a single string $S$.
- The third line contains a single integer $Q$.
- $Q$ lines follow. Each of these lines contains three space-separated integers $L$ $R$ $K$ describing a query.

###Output:
For each query, print a single line containing two space separated integers $l$ and $r$ ― the answer to the query.

###Constraints 
- $1 \leq T \leq 10^5$
- $2 \leq N \leq 5\times10^5$
- $1 \leq Q \leq 5 \times 10^5$
- $1 \leq L \leq R \leq N$
- $1 \leq K \leq R - L + 1$
- The sum of $N$ over all test cases does not exceed $5\times10^5$
- The sum of $Q$ over all test cases does not exceed $5\times10^5$


###Sample Input:
    1
    5
    abcab
    4
    1 3 2
    2 5 3
    3 4 1
    4 5 1

###Sample Output:
    1 3
    2 4
    3 3
    -1 -1
    
###Explanation:

Query $1$: The unique substrings in $[1, 3]$ are *c*, *abc* and *bc*. *abc* is the lexicographically smallest unique substring of length atleast 2.

Query $2$: The unique substrings in $[2, 5]$ are *bc*, *bca*, *bcab*, *c*, *ca* and *cab*. *bca* is the lexicographically smallest unique substring of length atleast 3.

Query $3$: The unique substrings in $[3, 4]$ are *c* and *ca*. *c* is the lexicographically smallest unique substring of length atleast 1.

Query $4$: None of the substrings in $[4,5]$ are unique.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>