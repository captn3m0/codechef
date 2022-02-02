---
{"category_name":"medium","problem_code":"TRANSACT","problem_name":"Inequality Reduction","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"jtnydv25","problem_tester":null,"date_added":"7-12-2019","tags":{"0":"gw19mos","1":"icpc2019","2":"icpcgw19","3":"jtnydv25","4":"medium","5":"observation","6":"theory"},"problem_difficulty_level":"Medium-Hard","best_tag":"Medium Hard","editorial_url":"https://discuss.codechef.com/problems/TRANSACT","time":{"view_start_date":1576781100,"submit_start_date":1576781100,"visible_start_date":1576781100,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TRANSACT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
There are $n$ friends. The $i^{\text{th}}$ friend has $A_i$ coins.  You are also given an integer $R$

Define a transaction as transfer of one coin from one friend to another. They can do as many transactions as they want under the constraint that:
- For any ordered pair of friends $i$ and $j$, the number of transactions from $i$ to $j$ doesn't exceed $R$

What is the maximum possible number of coins the friend with minimum coins can have in the end?

Please note that the number of coins held by a person can't go negative at any time in the process of transactions.

### Input
- First line will contain $n$ and $R$.
- Then second line contains $n$ integers separated by a space, $A_1, A_2, \ldots, A_n$.

### Output
Print the maximum possible number of coins the friend with minimum coins can have in the end.

### Constraints 
- $1 \leq n \leq 10^5$
- $1 \leq A_i \leq 10^9$
- $1 \leq R \leq 10^3 $


### Example Input
```
3 1
1 3 5
```

### Example Output
```
3
```

### Explanation
Do the following transactions:

1) 3 $\rightarrow$ 1

2) 3 $\rightarrow$ 2

3) 2 $\rightarrow$ 1

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>