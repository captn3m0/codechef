---
{"category_name":"school","problem_code":"RELATIVE","problem_name":"Relativity","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/Z7O3uKVTHPs","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"28-06-2021","tags":{"0":"cakewalk","1":"daanish_adm","2":"july21"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/RELATIVE","time":{"view_start_date":1626082200,"submit_start_date":1626082200,"visible_start_date":1626082200,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=RELATIVE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/JULY21/bengali/RELATIVE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JULY21/mandarin/RELATIVE.pdf), [Russian](https://www.codechef.com/download/translated/JULY21/russian/RELATIVE.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JULY21/vietnamese/RELATIVE.pdf) as well.

In Chefland, the speed of light is $c\ \mathrm{m}/\mathrm{s}$, and acceleration due to gravity is $g\ \mathrm{m}/\mathrm{s}^2$. 

Find the smallest height (in meters) from which Chef should jump such that during his journey down only under the effect of gravity and independent of any air resistance, he achieves the speed of light and verifies Einstein's theory of special relativity.

Assume he jumps at zero velocity and at any time, his velocity ($v$) and depth of descent ($H$) are related as
$$v^2 = 2 \cdot g \cdot H.$$

### Input

- The first line contains an integer $T$, the number of test cases. Then the test cases follow.
- Each test case contains a single line of input, two integers $g$, $c$.

### Output
For each test case, output in a single line the answer to the problem. We can show that under the constraints, the answer is an integer.

### Constraints
- $1 \leq T \leq 5\cdot 10^3$
- $1 \leq g \leq 10$
- $1000 \leq c \leq 3000$
- $2 \cdot g$ divides $c^2$.

### Subtasks
**Subtask #1 (100 points):** Original constraints

### Sample Input
```
3
7 1400
5 1000
10 1000
```

### Sample Output
```
140000
100000
50000
```

### Explanation
**Test Case $1$:** For Chef to achieve the speed of light, the minimum height required is $\frac{c^2}{2 \cdot g}$ = $\frac{1400 \cdot 1400}{14}$ = $140000$ meters.

**Test Case $3$:** For Chef to achieve the speed of light, the minimum height required is $\frac{c^2}{2 \cdot g}$ = $\frac{1000 \cdot 1000}{20}$ = $50000$ meters.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>