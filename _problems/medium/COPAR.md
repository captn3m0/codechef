---
{"category_name":"medium","problem_code":"COPAR","problem_name":"Cute Chef Gift","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n4\r\n2 3 4 5","output":3,"explanation":"","isDeleted":false}}},"video_editorial_url":"https://youtu.be/au3B9JEtUyo","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mohammed200218","problem_tester":"","date_added":"19-10-2020","tags":{"0":"difference","1":"easy","2":"ltime89","3":"mohammed200218","4":"mohammed200218","5":"sieve"},"problem_difficulty_level":"Easy","best_tag":"Difference Array","editorial_url":"https://discuss.codechef.com/problems/COPAR","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=COPAR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME89/hindi/COPAR.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME89/bengali/COPAR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME89/mandarin/COPAR.pdf), [Russian](https://www.codechef.com/download/translated/LTIME89/russian/COPAR.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME89/vietnamese/COPAR.pdf) as well.

Chef wants to give a gift to Chefina to celebrate their anniversary. Of course, he has a sequence $a_1, a_2, \ldots, a_N$ ready for this occasion. Since the half-heart necklace is kind of cliche, he decided to cut his sequence into two pieces and give her a piece instead. Formally, he wants to choose an integer $l$ ($1 \le l \lt N$) and split the sequence into its prefix with length $l$ and its suffix with length $N-l$.

Chef wants his gift to be *cute*; he thinks that it will be cute if the product of the elements in Chefina's piece is coprime with the product of the elements in his piece. Can you tell him where to cut the sequence? Find the smallest valid $l$ such that Chef's gift would be cute.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains the integer $N$.
- The second line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$.

### Output
For each test case, print a single line containing one integer $l$ where Chef should cut the sequence.

It is guaranteed that a solution exists for the given test data.

### Constraints
- $1 \le T \le 20$
- $2 \le N \le 10^5$
- $2 \le a_i \le 10^5$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $3 \cdot 10^5$

### Subtasks
**Subtask #1 (25 points):**
- $N \le 200$
- the sum of $N$ over all test cases does not exceed $600$

**Subtask #2 (40 points):**
- $N \le 2,000$
- the sum of $N$ over all test cases does not exceed $6,000$

**Subtask #3 (35 points):** original constraints

### Example Input
```
1
4
2 3 4 5
```

### Example Output
```
3
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>