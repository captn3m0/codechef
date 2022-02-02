---
{"category_name":"medium","problem_code":"EQLGIFTS","problem_name":"Equal Gifts","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/JLn4mNADoBQ","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"the_hyp0cr1t3","problem_tester":"","date_added":"23-01-2021","tags":{"0":"cook126","1":"hard","2":"meet","3":"pigeonhole","4":"the_hyp0cr1t3"},"problem_difficulty_level":"Hard","best_tag":"Meet In Middle","editorial_url":"https://discuss.codechef.com/problems/EQLGIFTS","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EQLGIFTS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK126/hindi/EQLGIFTS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK126/mandarin/EQLGIFTS.pdf), [Russian](https://www.codechef.com/download/translated/COOK126/russian/EQLGIFTS.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK126/vietnamese/EQLGIFTS.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK126/bengali/EQLGIFTS.pdf) as well.

Although Christmas has long since passed, Mr. and Mrs. J have a pile of $N$ unopened gifts with values $a_1, a_2, \ldots, a_N$.

They wish to distribute some (possibly all) of the gifts amongst their two children Alice and Bob, and give the rest away to charity. They must do so in such a manner that:
- Alice and Bob get at least one gift each
- each gift is given to at most one of the children, as they do not like to share
- the sum of values of the gifts Alice gets is equal to the sum of values of gifts Bob gets

Given $N$ and the values of all gifts, help Mr. and Mrs. J distribute the gifts or state that it is impossible to distribute them in a way that satisfies all conditions.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$.

### Output
For each test case:
- If it is impossible to distribute the gifts in the desired way, print a single line containing the string `"NO"` (without quotes).
- Otherwise, print two lines. The first of these lines should contain the string `"YES"` (without quotes). The second line should contain a single string with length $N$. For each valid $i$, the $i$-th character of this string should be:
    - 'A' if the $i$-th gift is given to Alice
    - 'B' if the $i$-th gift is given to Bob
    - 'N' if the $i$-th gift is given to charity

If there are multiple solutions, you may find any one of them.

### Constraints
- $1 \leq T \leq 5$
- $2 \leq N \leq 10^5$
- $1 \leq a_i \leq 10^8$ for each valid $i$

### Example Input
```
2
5
3 2 4 5 2
2
10 70
```

### Example Output
```
YES
NABNA
NO
```
    
### Explanation
**Example case 1:** Alice receives gifts with total value $2 + 2 = 4$. Bob gets a single gift, also with value $4$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>