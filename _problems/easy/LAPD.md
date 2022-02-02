---
{"category_name":"easy","problem_code":"LAPD","problem_name":"Biladerim Icin","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\n2 5 3\n3 2 4","output":"1\n6","explanation":"**Example case 1:** There is only one interesting triple: $(2, 1, 3)$.\n\n**Example case 2:** The interesting triples are $(2, 1, 3)$, $(2, 1, 4)$, $(3, 1, 2)$, $(3, 1, 3)$, $(3, 1, 4)$ and $(3, 2, 4)$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SCM guile","38":"PERL6","39":"ERL","40":"CLPS","41":"ICK","42":"NICE","43":"PRLG","44":"ICON","45":"COB","46":"SCM chicken","47":"PIKE","48":"SCM qobi","49":"ST","50":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mrkerim","problem_tester":null,"date_added":"5-06-2019","tags":{"0":"anand20","1":"determinant","2":"math","3":"mrkerim","4":"polynomial","5":"sept19","6":"sept19a","7":"sylvesters"},"problem_difficulty_level":"Easy","best_tag":"Sylvesters Criterion","editorial_url":"https://discuss.codechef.com/problems/LAPD","time":{"view_start_date":1568626202,"submit_start_date":1568626202,"visible_start_date":1568626202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=LAPD","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/SEPT19/hindi/LAPD.pdf), [Bengali](https://www.codechef.com/download/translated/SEPT19/bengali/LAPD.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/SEPT19/mandarin/LAPD.pdf), [Vietnamese](https://www.codechef.com/download/translated/SEPT19/vietnamese/LAPD.pdf) as well.

Ben Fero is a popular guy who likes inventing and solving interesting problems. Last weekend, he found a challenging problem, but he could not solve it on his own, so he decided to ask you for help. Can you help Ben Fero solve this problem? 

You are given three integers $A$, $B$ and $C$. Let's call a triple of integers $(a, b, c)$ *interesting* if it satisfies the following criteria:
- $1 \le a \le A$, $1 \le b \le B$ and $1 \le c \le C$
- for any two real numbers $x$ and $y$ such that $x \neq 0$ and $y \neq 0$, $ax^2 + 2bxy + cy^2 \gt x^2 + y^2$ holds

You should find the number of interesting triples. Since this number could be very large, compute it modulo $10^9+7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains three space-separated integers $A$, $B$ and $C$.

### Output
For each test case, print a single line containing one integer ― the number of interesting triples modulo $10^9+7$.

### Constraints 
- $1 \le T \le 10$
- $1 \le A, C \le 10^9$
- $1 \le B \le 5,000$

### Subtasks
**Subtask #1 (30 points):** $1 \le A, B, C \le 100$

**Subtask #2 (20 points):** $1 \le A, B, C \le 5,000$

**Subtask #3 (50 points):** original constraints

### Example Input
```
2
2 5 3
3 2 4
```

### Example Output
```
1
6
```

### Explanation
**Example case 1:** There is only one interesting triple: $(2, 1, 3)$.

**Example case 2:** The interesting triples are $(2, 1, 3)$, $(2, 1, 4)$, $(3, 1, 2)$, $(3, 1, 3)$, $(3, 1, 4)$ and $(3, 2, 4)$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>