---
{"category_name":"medium","problem_code":"PRODMEX","problem_name":"Product Mex Queries","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n5 3\r\n2 3 2 5 4\r\n2 3\r\n1 4\r\n3 5","output":"4\r\n7\r\n3","explanation":"The array is $[2,3,2,5,4]$.\r\n\r\nThe first query asks about the range $[2, 3]$. The subsequences of this range are $[]$, $[3]$, $[2]$, and $[3, 2]$. They have products $1$, $3$, $2$, and $6$, respectively. The smallest missing positive integer from the list of products is $4$.\r\n\r\nThe second query asks about the range $[1, 4]$.\r\n- $[]$ has product $1$\r\n- $[2]$ has product $2$\r\n- $[3]$ has product $3$\r\n- $[2, 2]$ has product $4$\r\n- $[5]$ has product $5$\r\n- $[2, 3]$ has product $6$\r\n- But $7$ does not appear as a subsequence product in the given range.\r\n\r\nThe third query asks about the range $[3, 5]$.\r\n- $[]$ has product $1$\r\n- $[2]$ has product $2$\r\n- But $3$ does not appear as a subsequence product in the given range.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/1wNAXys9kQ4","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2.5,"source_sizelimit":50000,"problem_author":"mohammed200218","problem_tester":"","date_added":"14-05-2021","tags":{"0":"cook129","1":"medium","2":"mohammed200218","3":"number","4":"segment"},"problem_difficulty_level":"Medium-Hard","best_tag":"Segment Tree","editorial_url":"https://discuss.codechef.com/problems/PRODMEX","time":{"view_start_date":1621794602,"submit_start_date":1621794602,"visible_start_date":1621794602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PRODMEX","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK129/mandarin/PRODMEX.pdf), [Russian](https://www.codechef.com/download/translated/COOK129/russian/PRODMEX.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK129/vietnamese/PRODMEX.pdf) and [Bengali](https://www.codechef.com/download/translated/COOK129/bengali/PRODMEX.pdf) as well.

You are given an array $a$ of length $N$ and $Q$ queries. Each query is described by a pair of integers, $l$ and $r$. Answer each query with the following: if we take every subsequence of the elements with indices between $l$ and $r$ (inclusive) and write down their products, what will be the smallest missing positive integer?

A subsequence of an array is a sequence you obtain by deleting some (possibly zero or all) elements of the array. The product of the empty subsequence is defined to be $1$.

###Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$.
- The second line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$.
- Each of the next $Q$ lines contains two space-separated integers, $l$ and $r$, denoting the query's range.

###Output
For each query, output the smallest missing subsequence product on a new line.

###Constraints
- $1 \le T \le 5$
- $1 \le N,Q \le 10^5$
- $1 \le a_i \le 10^9$ for each valid $i$
- $1 \le l \le r \le N$

###Sample Input
```
1
5 3
2 3 2 5 4
2 3
1 4
3 5
```

###Sample Output
```
4
7
3
```

###Explanation

The array is $[2,3,2,5,4]$.

The first query asks about the range $[2, 3]$. The subsequences of this range are $[]$, $[3]$, $[2]$, and $[3, 2]$. They have products $1$, $3$, $2$, and $6$, respectively. The smallest missing positive integer from the list of products is $4$.

The second query asks about the range $[1, 4]$.
- $[]$ has product $1$
- $[2]$ has product $2$
- $[3]$ has product $3$
- $[2, 2]$ has product $4$
- $[5]$ has product $5$
- $[2, 3]$ has product $6$
- But $7$ does not appear as a subsequence product in the given range.

The third query asks about the range $[3, 5]$.
- $[]$ has product $1$
- $[2]$ has product $2$
- But $3$ does not appear as a subsequence product in the given range.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>