---
{"category_name":"easy","problem_code":"UNBAL","problem_name":"Yet Another Balanced Parenthesis Problem","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"jtnydv25","problem_tester":null,"date_added":"10-12-2019","tags":{"0":"constructive","1":"easy","2":"gw19mos","3":"icpc2019","4":"icpcgw19","5":"jtnydv25","6":"maths","7":"observation"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/UNBAL","time":{"view_start_date":1576781100,"submit_start_date":1576781100,"visible_start_date":1576781100,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=UNBAL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
A balanced parenthesis string is defined as follows:
- The empty string is balanced
- If P is balanced, (P) is also 
- If P and Q are balanced, PQ is also balanced

You are given two even integers $n$ and $k$. Find any balanced paranthesis string of length $n$ that doesn't contain a balanced substring of length $k$, or claim that no such string exists.

### Input
- First line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase contains of a single line containing $n$ and $k$.

### Output
For every testcase, print on a new line, any balanced paranthesis string of length $n$ that doesn't contain a balanced substring of length $k$. If there doesn't exist any such string, print $-1$ instead.

### Constraints 
- $1 \leq T \leq 50000$
- $2 \leq k \leq n \leq 10^5$
- Sum of $n$ over all testcases doesn't exceed $10^5$.
- $n$ and $k$ are both even integers.

### Example Input
```
2
4 2
8 6
```

### Example Output
```
-1
(())(())
```

### Explanation
In the first testcase, the only balanced strings of length $4$ are `(())` and `()()`, both of which contain `()` as a substring.

In the second testcase, `(())(())` is a balanced string that doesn't contain any balanced substring of length $6$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>