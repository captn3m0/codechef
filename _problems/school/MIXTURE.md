---
{"category_name":"school","problem_code":"MIXTURE","problem_name":"Which Mixture","problemComponents":{"constraints":"- $1 \\leq T \\leq 20$\n- $0 \\leq A, B \\leq 100$\n- $A + B \\gt 0$\n","constraintsState":true,"subtasks":"- **Subtask 1 (100 points):** Original constraints","subtasksState":true,"inputFormat":"- The first line contains $T$ denoting the number of test cases. Then the test cases follow.\n- Each test case contains two space-separated integers $A$ and $B$ on a single line.","inputFormatState":true,"outputFormat":"For each test case, output on a single line the type of mixture Chef produces, whether it is a `Solution`, `Solid`, or `Liquid`. **The output is case sensitive.**","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"3\n10 5\n0 3\n3 0\n","output":"Solution\nLiquid\nSolid\n","explanation":"**Test case $1$**: Chef adds both solid and liquid to the mixture, hence the mixture is a solution.\n\n**Test case $2$**: Chef does not add solid to the mixture, hence the mixture is liquid.\n\n**Test case $3$**: Chef does not add liquid to the mixture, hence the mixture is solid.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/NJp1YqWEVRg","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"soumyadeep_21","problem_tester":"","date_added":"24-09-2021","tags":{"0":"cakewalk","1":"oct21","2":"soumyadeep_21"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/MIXTURE","time":{"view_start_date":1633944600,"submit_start_date":1633944600,"visible_start_date":1633944600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MIXTURE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/OCT21/bengali/MIXTURE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/OCT21/mandarin/MIXTURE.pdf), [Russian](https://www.codechef.com/download/translated/OCT21/russian/MIXTURE.pdf), and [Vietnamese](https://www.codechef.com/download/translated/OCT21/vietnamese/MIXTURE.pdf) as well.

Chef has $A$ units of solid and $B$ units of liquid. He combines them to create a mixture. What kind of mixture does Chef produce: a solution, a solid, or a liquid? 

A mixture is called :
 
1) A *solution* if $A \gt 0$ and $B \gt 0$,

2) A *solid* if $B = 0$, or

3) A *liquid* if $A = 0$. 

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>