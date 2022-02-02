---
{"category_name":"school","problem_code":"XYSTR","problem_name":"Chef and String","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\nxy\r\nxyxxy\r\nyy","output":"1\r\n2\r\n0","explanation":"**Example case 1:** There is only one possible pair: (first student, second student).\r\n\r\n**Example case 2:** One of the ways to form two pairs is: (first student, second student) and (fourth student, fifth student). \r\n\r\nAnother way to form two pairs is: (second student, third student) and (fourth student, fifth student).","isDeleted":false}}},"video_editorial_url":"https://youtu.be/oB1Uz6dmzJg","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"raja1999","problem_tester":"","date_added":"18-05-2020","tags":{"0":"dynamic","1":"june20","2":"raja1999","3":"rajarshi_basu","4":"simple"},"problem_difficulty_level":"Simple-Easy","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/XYSTR","time":{"view_start_date":1592213402,"submit_start_date":1592213402,"visible_start_date":1592213402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=XYSTR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JUNE20/hindi/XYSTR.pdf), [Bengali](https://www.codechef.com/download/translated/JUNE20/bengali/XYSTR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JUNE20/mandarin/XYSTR.pdf), [Russian](https://www.codechef.com/download/translated/JUNE20/russian/XYSTR.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JUNE20/vietnamese/XYSTR.pdf) as well.

There are $N$ students standing in a row and numbered $1$ through $N$ from left to right. You are given a string $S$ with length $N$, where for each valid $i$, the $i$-th character of $S$ is 'x' if the $i$-th student is a girl or 'y' if this student is a boy. Students standing next to each other in the row are friends.

The students are asked to form pairs for a dance competition. Each pair must consist of a boy and a girl. Two students can only form a pair if they are friends. Each student can only be part of at most one pair. What is the maximum number of pairs that can be formed?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single string $S$.

### Output
For each test case, print a single line containing one integer ― the maximum number of pairs.

### Constraints
- $1 \le T \le 100$
- $1 \le N \le 10^5$
- $|S| = N$
- $S$ contains only characters 'x' and 'y'
- the sum of $N$ over all test cases does not exceed $3 \cdot 10^5$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
3
xy
xyxxy
yy
```

### Example Output
```
1
2
0
```

### Explanation
**Example case 1:** There is only one possible pair: (first student, second student).

**Example case 2:** One of the ways to form two pairs is: (first student, second student) and (fourth student, fifth student). 

Another way to form two pairs is: (second student, third student) and (fourth student, fifth student).

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>