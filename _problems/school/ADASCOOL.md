---
{"category_name":"school","problem_code":"ADASCOOL","problem_name":"Ada School","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":null,"date_added":"31-08-2018","tags":{"0":"alei","1":"conditionals","2":"logic","3":"matrices","4":"simple"},"editorial_url":"https://discuss.codechef.com/problems/ADASCOOL","time":{"view_start_date":1548009002,"submit_start_date":1548009002,"visible_start_date":1548009002,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/COOK102/hindi/ADASCOOL.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/COOK102/mandarin/ADASCOOL.pdf), [Russian](http://www.codechef.com/download/translated/COOK102/russian/ADASCOOL.pdf), [Vietnamese](http://www.codechef.com/download/translated/COOK102/vietnamese/ADASCOOL.pdf) and [Bengali](http://www.codechef.com/download/translated/COOK102/bengali/ADASCOOL.pdf) as well.

Ada's classroom contains $N \cdot M$ tables distributed in a grid with $N$ rows and $M$ columns. Each table is occupied by exactly one student.

Before starting the class, the teacher decided to shuffle the students a bit. After the shuffling, each table should be occupied by exactly one student again. In addition, each student should occupy a table that is adjacent to that student's original table, i.e. immediately to the left, right, top or bottom of that table.

Is it possible for the students to shuffle while satisfying all conditions of the teacher?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $N$ and $M$.

### Output
For each test case, print a single line containing the string `"YES"` if it is possible to satisfy the conditions of the teacher or `"NO"` otherwise (without quotes).

### Constraints 
- $1 \le T \le 5,000$
- $2 \le N, M \le 50$

### Example Input
```
2
3 3
4 4
```

### Example Output
```
NO
YES
```

### Explanation
**Example case 2:** The arrows in the following image depict how the students moved.

![](https://codechef_shared.s3.amazonaws.com/download/Images/CK102TST/ADASCOOL/ADASCOOL.png)
