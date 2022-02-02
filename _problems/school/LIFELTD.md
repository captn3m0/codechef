---
{"category_name":"school","problem_code":"LIFELTD","problem_name":"Life Limited","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"17-12-2018","tags":{"0":"admin2"},"time":{"view_start_date":1545157800,"submit_start_date":1545157800,"visible_start_date":1545157800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Recently the company Life Ltd created a new logo for themselves. You are asked to test the design of the logo. 

The logo is a 3 * 3 square grid with 9 cells. Each cell contains some lower case english letter. This logo will be considered good if there exist three cells in the shape of an L that contain the letter 'l' (lower case 'L') in each of them. That is, there should be a cell with 'l', its cell directly beneath it should also have 'l' and the cell to the right of the second cell should also have 'l'.

Your task is to tell whether the logo is good or not.


### Input
- The first line of the input contains an integer $T$ denoting the number of test cases. The description of the test cases follows.
- Each of the next three lines contains a description of the logo, i-th of the line contains three characters which denote the i-th row of the logo. 

### Output
For each test case, output yes or no according to the answer to the problem.

###Constraints
- $1 \le T \le 100$

### Example Input
```
3
laz
lla
aaa
ala
lla
aaa
lll
lll
lll
```

### Example Output
```
yes
no
yes
```

###Explanation:
**Testcase1**: The L shaped cells with 'l' in each of them is shown in bold here:

**l**aa

**ll**a

aaa