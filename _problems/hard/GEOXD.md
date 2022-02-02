---
{"category_name":"hard","problem_code":"GEOXD","problem_name":"Easy Geo xD","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n1 1 1 1\r\n1 1 1 3","output":1,"explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"sajib_readd","problem_tester":"","date_added":"17-03-2020","tags":{"0":"hard","1":"july20","2":"math","3":"sajib_readd","4":"sajib_readd"},"problem_difficulty_level":"Hard","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/GEOXD","time":{"view_start_date":1594632600,"submit_start_date":1594632600,"visible_start_date":1594632600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=GEOXD","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JULY20/hindi/GEOXD.pdf), [Bengali](https://www.codechef.com/download/translated/JULY20/bengali/GEOXD.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JULY20/mandarin/GEOXD.pdf), [Russian](https://www.codechef.com/download/translated/JULY20/russian/GEOXD.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JULY20/vietnamese/GEOXD.pdf) as well.

Chef's house is an axis-parallel stripe-like building in a 3D Cartesian coordinate system. It contains all points with coordinates $(x, y, z)$, where $x_1 \le x \le x_2$ and $y_1 \le y \le y_2$; $z$ can be any real number.

A plane $\{(x, y, z): ax + by + cz = d\}$ in this coordinate system intersects Chef's house. Chef's kitchen is the intersection of that plane and Chef's house. You know that Chef likes to cook his codes with a lot of secret masalas, so he wants to hide his masala boxes in some safe places. He decided to keep his masala boxes at the lattice points of his kitchen, i.e. points $(x, y, z)$ which belong to Chef's kitchen such that $x$, $y$ and $z$ are integers.

Since Chef is very busy with all of his dishes, he gave you the job of counting the lattice points in the kitchen. Since this number can be very large, compute it modulo $10^9 + 7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains four space-separated integers $x_1$, $x_2$, $y_1$ and $y_2$.
- The second line contains four space-separated integers $a$, $b$, $c$ and $d$.

### Output
For each test case, print a single line containing one integer ― the number of lattice points modulo $10^9 + 7$.

### Constraints
- $1 \le T \le 5 \cdot 10^5$
- $1 \le x_1, x_2, y_1, y_2 \le 10^9$
- $1 \le a, b, c \le 10^8$
- $1 \le d \le 10^{14}$

### Subtasks
**Subtask #1 (25 points):**
- $T \le 2 \cdot 10^4$
- $x_1, x_2, y_1, y_2 \le 5 \cdot 10^5$
- $a, b, c \le 10^5$
- $d \le 10^8$

**Subtask #2 (75 points):** original constraints

### Example Input
```
1
1 1 1 1
1 1 1 3
```

### Example Output
```
1
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>