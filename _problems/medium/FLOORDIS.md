---
{"category_name":"medium","problem_code":"FLOORDIS","problem_name":"Floor Distribution","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"cenadar","problem_tester":"furko","date_added":"1-12-2015","tags":{"0":"cenadar","1":"march16","2":"maxflow","3":"medium","4":"mincut","5":"minimum"},"editorial_url":"http://discuss.codechef.com/problems/FLOORDIS","time":{"view_start_date":1458034200,"submit_start_date":1458034200,"visible_start_date":1458034200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH16/mandarin/FLOORDIS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/MARCH16/russian/FLOORDIS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH16/vietnamese/FLOORDIS.pdf">Vietnamese</a> as well.</h3>
<p>Chef just come up with a very good idea for his business. He needs to hire two group of software engineers. Each group of engineers will work on completely different things and people from different groups don't want to disturb (and even hear) each other. Chef has just rented a whole floor for his purposes in business center "Cooking Plaza". The floor is a rectangle with dimensions <b>N</b> over <b>M</b> meters. For simplicity of description the floor's structure, let's imagine that it is split into imaginary squares of size <b>1x1</b> called "cells".</p>
<p> The whole floor is split into rooms (not necessarily rectangular). There are some not noise-resistant walls between some of the cells. Two adjacent cells belong to the same room if they don't have the wall between them. Cells are considered adjacent if and only if they share an edge. Also, we say that relation "belong to the same room" is transitive. In other words we say that if cells <b>A</b> and <b>B</b> belong to the same room and <b>B</b> and <b>C</b> belong to the same room then <b>A</b> and <b>C</b> belong to the same room.</p>
<p>So we end up having a partition of the floor into rooms. It also means, that each point on the floor belongs to some room.</p>
<p>Chef have to distribute the rooms between engineers of two groups. Engineers from the different groups cannot seat in the same room. If engineers from a different groups seat in adjacent rooms, the walls these rooms share have to be noise-resistant. The cost of having one meter of wall isolated is <b>I</b> per month. Due to various reasons Chef has to pay an additional cost for support of each of the room (e.g. cleaning costs money as well). Interesting to know that support cost for a particular room may differ depending on engineers of which group seat in this room.</p>
<p>Chef doesn't know the number of people he needs in each group of engineers so he wants to minimize the money he needs to pay for all the floor rent and support. He will see how it goes and then redistribute the floor or find another floor to rent or whatever. Either way, you don't need to care about this.</p>
<p>Please pay attention to the restriction that all the rooms should be occupied by engineers of one of the teams. Also, it might happen that all the rooms will be assigned to the same team and this is completely okay.</p>
<h3>Input</h3>
<p>The first line of the input contains three integers <b>N</b>, <b>M</b>, <b>W</b>, <b>K</b> and <b>R</b>, where <b>N</b> and <b>M</b> denote size of the floor, <b>W</b> denote number of one-meter-length walls, <b>K</b> denote cost of having one-meter-length wall be noise-resistant and <b>R</b> denote the number of rooms in which floor is partitioned.</p>
<p>Next <b>W</b> lines contain four integers each <b>X<sub>1</sub></b>, <b>Y<sub>1</sub></b>, <b>X<sub>2</sub></b>, <b>Y<sub>2</sub></b>. This means that cells with coordinates <b>X<sub>1</sub></b>, <b>Y<sub>1</sub></b> and <b>X<sub>2</sub></b>, <b>Y<sub>2</sub></b> have a wall between them. It's guaranteed that this cells share an edge.</p>
<p>Next <b>R</b> lines will contain four space separated integers each <b>X</b>, <b>Y</b>, <b>C<sub>1</sub></b>, <b>C<sub>2</sub></b>. This should be treated as support cost per month in a room that contain cell <b>X</b>, <b>Y</b> is <b>C<sub>1</sub></b> for first group of engineers and <b>C<sub>2</sub></b> for second group of engineers. It's guaranteed that all of cells among these <b>R</b> cells belong to different rooms. All coordinates are indexed starting from <b>1</b>.</p>
<h3>Output</h3>
<p>Output a single integer - sum of the rent and support costs per month.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>W</b> ≤ <b>min(2*N*M, 150000)</b></li>
<li><b>1</b> ≤ <b>X<sub>1</sub></b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>Y<sub>1</sub></b> ≤ <b>M</b></li>
<li><b>1</b> ≤ <b>X<sub>2</sub></b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>Y<sub>2</sub></b> ≤ <b>M</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>10000</b></li>
<li><b>1</b> ≤ <b>C<sub>1</sub></b>, <b>C<sub>2</sub></b> ≤ <b>10000</b></li>
<li>Limitations on <b>R</b> is described in subtasks section.</li>
</ul>
<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1 [30 points]: 1 ≤ R ≤ 50</b></li>
<li><b>Subtask #2 [70 points]: 1 ≤ R ≤ 500</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2 4 5 5 3
1 2 1 3
1 2 2 2
1 3 2 3
1 4 2 4
2 1 2 2
1 1 30 12
1 3 10 15
2 3 11 22
<b>Output:</b>
48
</pre><h3>Explanation</h3>
<p>Here's the scheme of the floor</p>
<p><img src="https://lh3.googleusercontent.com/Kf814fLVhIDx-8ZczUSmJAqNDTWpVLHBD6lwZr3HMxxk5OUb1xOU01vCTSIAcgD9Vpo4fYhVwIfRLc9VNDE_g0kVnbFrZRfKkDyfdUJjXaP2VhsYwy1nGXTOwGpsgXNcoOpkpLc4Qs_rDsX23T56BGkTX4M4Z0Q8gcP0T7UqYGI4x2luDAw5MSSgdJlg186Rgo0YATY8HW4HIDUbvWa_zPITOJojByg62rWs8HcKfTxg4T5hD1QVTNfUUxTkyv9b9jivONq2RWxFPAcOt_o2WNmMYAFiEHkkZ-h6hLxWwrb2LA4VLa92xIvLV8mG3W_ZOD8ZGFCG-F6GXskHW8jhq8IppGi9Hp2dGJ2I4PvWIT9yY8R-9h3BbNk6YoC9iYkuge2ghzuJ2N-Q5CogdnnZ-wUh6WK0yC37E7MLKAEKWyy4LGRTlq0689T_OVOKkIHBHKSUvUgYmbwGbtbkO71HXPIYUXgX0xtrnEWxKYuHtmM1KMmV8gY4f55vCnd3Hc1Mw5LqMphYfI1eWOFVBITsbHwmt41TomOyJIXboRpSfcxFst_o-Cd1TiCHpFpNiBEi52oT=w426-h210-no" /></p>
<p>The correct assignment is the following.</p>
<p><img src="https://lh3.googleusercontent.com/FtZg4eSBDWSnD4RA1oNWH6-we9jnXlyBwVmdXYTJCwUmqI8GotpZi_48dmsYO_s6wvr-r7qGd2xYFl3J-1AhlL4f_Kn9iaH63QSHDgpUQdtHXurhrwYHzunNXeFBYfsjCfawrIsyc37SylEUwsv-tgPdRejhUmjuQo-s_RpeWsO_aL2TqUA-ewE65vLdHcS5cP6_I9FHDZ6XyBqTAq67nxyJu1A2AB6beFynSenTwRX6-9uZoDTgrXy6mAEcMwMk4KpVpxRtbwkRr5BI22G1yct-CUtlPEzJIIS_57qYIb_DapcranpRISalB6kHxRYtNenWhA7yxyZ_efiCh3xlRH8nkVC1-l2xc3ty1RzwOM7dZo2UhDCrWqJ81eSFpd76EWZ_RmdU1clMeoOBAkJyEfVITfoA7F2R1sE40504Y5ytcTpL0wUxTfh9QJan34Y5bjImycu3gmDiQAnQhJxo_V36B7dDejIc_T3bJySbXfGzqwWGRpS1MQ319ywKi_Ca4ymF51HMX-0toslxf8h08Uw_TxrrMSHFctsN8AZcBujIGplkU_55Ag0mkYnJnZhodnCY=w426-h210-no" /></p>
<p>
<ul>
<li>The blue color denotes assignment to the first team. Total cost for renting two rooms for this team is <b>11 + 10 = 21</b>.</li>
<li>The red color denotes assignment to the second team. Total cost for renting the only room for the team is <b>12</b>.</li>
<li>There are <b>3</b> meters of walls between them, resulting in isolating cost of <b>15</b>.</li>
<p>The grand total is <b>21 + 12 + 15 = 48</b></p>
</ul></p>