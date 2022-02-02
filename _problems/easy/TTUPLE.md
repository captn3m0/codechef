---
{"category_name":"easy","problem_code":"TTUPLE","problem_name":"Operations on a Tuple","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n3 5 7\r\n6 5 10\r\n8 6 3\r\n9 7 8","output":"1\r\n2","explanation":"**Example case 1:** We add $3$ to the first and third element of $(3, 5, 7)$ to form $(6, 5, 10)$.\r\n\r\n**Example case 2:** We can add $1$ to each element to form $(9, 7, 4)$ and then multiply the third element by $2$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"smartnj","problem_tester":null,"date_added":"10-05-2020","tags":{"0":"ad","1":"easy","2":"implementation","3":"june20","4":"rajarshi_basu","5":"smartnj"},"problem_difficulty_level":"Easy-Medium","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/TTUPLE","time":{"view_start_date":1592213402,"submit_start_date":1592213402,"visible_start_date":1592213402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TTUPLE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JUNE20/hindi/TTUPLE.pdf), [Bengali](https://www.codechef.com/download/translated/JUNE20/bengali/TTUPLE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JUNE20/mandarin/TTUPLE.pdf), [Russian](https://www.codechef.com/download/translated/JUNE20/russian/TTUPLE.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JUNE20/vietnamese/TTUPLE.pdf) as well.

Consider the following operations on a triple of integers. In one operation, you should:
- Choose an integer $d$ and an arithmetic operation ― either addition or multiplication.
- Choose a subset of elements of the triple.
- Apply the arithmetic operation to each of the chosen elements, i.e. either add $d$ to each of them or multiply each of them by $d$.

For example, if we have a triple $(3, 5, 7)$, we may choose to add $3$ to the first and third element, and we get $(6, 5, 10)$ using one operation.

You are given an initial triple $(p, q, r)$ and a target triple $(a, b, c)$. Find the minimum number of operations needed to transform $(p, q, r)$ into $(a, b, c)$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $p$, $q$ and $r$.
- The second line contains three space-separated integers $a$, $b$ and $c$.

### Output
For each test case, print a single line containing one integer ― the minimum required number of operations.

### Constraints
- $1 \le T \le 1,000$
- $|p|, |q|, |r|, |a|, |b|, |c| \le 10^9$

### Subtasks
**Subtask #1 (10 points):** $|p|, |q|, |r|, |a|, |b|, |c| \le 10$

**Subtask #2 (90 points):** original constraints

### Example Input
```
2
3 5 7
6 5 10
8 6 3
9 7 8
```

### Example Output
```
1
2
```

### Explanation
**Example case 1:** We add $3$ to the first and third element of $(3, 5, 7)$ to form $(6, 5, 10)$.

**Example case 2:** We can add $1$ to each element to form $(9, 7, 4)$ and then multiply the third element by $2$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>