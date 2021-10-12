@extends('layouts.app')

@section('content')
<div class="h-full">
        <div class="back-rec">
            <div class="path-2719">
                <div class="left-rec">
                    <div class="rec-2212">
                    </div>
                    <div class="rec-2217">
                    </div>
                    <div class="rec-2218">
                    </div>
                    <div class="rec-2219">
                    </div>
                </div>
                <div class="right-rec">
                    <div class="rec-2216">
                    </div>
                    <div class="rec-2214">
                    </div>
                    <div class="rec-2213">
                    </div>
                    <div class="rec-2215">
                    </div>
                </div>
            </div>
        </div>

        <div class="px-view py-view padding-top-8 mx-auto h-main">
            
			<div class="mx-auto py-8 max-w-sm text-center text-90">
				<svg class="fill-current" width="200" height="39" viewBox="0 0 200 39" xmlns="http://www.w3.org/2000/svg">
					<g>
						<image width="200" height="39" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAAAnCAYAAABKSgfJAAAACXBIWXMAAAsSAAALEgHS3X78AAAgAElEQVR4nO29aXhcV5Uu/O69z1CjSirNsyxZnuV5TuzYThw7TiAhhABJoAk05Da5hKbppvno5tLQNDTdzNOF0GFIAiEBO4mTGIckdjzE8yTLg6x5LpVUg2quM+7vx6kjyY5sK5Dm3u/5sp5Hjyzp1Nnj2mutd71rm3DOcT052XwelBAkUilkM1m89vp+MMowFBjGxptuRFd3D4YCw/D7/Zg3dxa6unoQGB7B7FkzcfjIcaxYvhiLFzYhnclgqvZEUUR3T++9J0813ymKoqHrOq2trT6/fOnir2uaNv4cIQSiKOKlP/wRRUWFKC8rhc+Xh5kN9RBFAcdPnMb3fvBTOJ0OGKaJgvx8zKirQUN9Hfr6B1BXW4PKinJcamtHXW0NIpEoOrt7YBgGCCEwTRO1NdVIJJPgJseK5Uvxwku7UVtTjfMXWrHtts1wu5zo7ulDNqtAFEWsXLEEO1/cjRl1dSj05yOVTqO6qgJjY3E4nQ4kEklQSqecV0IpMpnM6jPN5x4GwA3DIL4879hd7972BUJpApPmyuVyYs/rB6BpBm7fdisymQwAgFrvwHPPv4TOrh7MbJgBr9eDwPAIGKNwu1zw+wtw5NhJZNJp5OXlYe2alQiFI8hkMiCEoL6uFiBAOBzF8mWLwRgD5xymacLr9SDf54NpmhAEAX39/Xj2+V0oKiqEIDBQQjFndiPONLdgODiCObMbcbblAkLhMPz+AqxdtQKHjx6HIAhY2DQfpmliZsMMuJxO/Ognj2FoOAhREGCaJtavW4OC/HwYhgFd11FXW4NFCxfgqae3Y3AogLlzZqN/YAjz5s6CLEno6evHjLpaPPX0dlRXVeJL//wP+Mq//Scutrbjfe99N861d+PGEhmfKExD9frBw8MQtn4YPJ24bB3cN9x21b0vXFc73gYhhODk6WYwxuB0Od+kJLIkofVSx9pDh4/dJ8syVFVFLBY/XlFe+vWsogIAKCFgjGH/wcM409yCBz74vr9E1/8k4RxgjME0DLS1d0AUxSmfo5QikUg1Hjl64gEA0HUDRUUFmbVrVn2VMprgJgchgNPpwL4Dh/CrJ36LB//qPhDyFx3O/69l6qPt7W6EMozF4uCcQxJFSKIASRQgCgIExsAYgygKiizLkGUJsixDksQ0YwwCYxAFAbIs4dCR42hpuQCnw/GX6PafJbquo66uBv6CAhiGAc75+BdjDIIgQBAEiKKgWWO2viRJSjBGOaPUsgBuN86cacGO514EZeyq1ugd+e+Rv4gFAQBGLfeIcxOKooIDkETxugtOCIEg5CzHmRY4HBJM8/pu4f9p4ZxDEETMmTMLY2MxUGaN03JNA0gmU9d9h9PpxMnTZ/C77TtBCAFj7yjHX1r+YgoCALIsobe3H6+8tg+CwFBUVIitt94Mh0Oe8nlCqKUcByy3Spbt5/7vVxAAMHQd5eVlqK6uGv+d0+nAqdPNSKfTqK6uvOpnnU4HTp58RzmuJYQQkJy/ySiF2+0Cyx241t8uexigDJAcwBUxyLXkz1YQSsl4Rwkh4z9fTXTdQDqTgUOW0dvbj127X8Vd794GQWCX7XpCKWeMYe/rB3C6uQUOeWol+pP7TS7v9+TJvppMHt/EeOk1P2e7V7aIooBUOo0jR0/A43ZDkETzys84nQ7z5Knmt0U5phrXdMb6drb139GOLEvgnIuqqi1gjM4ZDYddv33m2aLRcCTEGNM0TW83DPO0SUgWTABMs46PjdxintprkIamJ2Ca+nTa+pMVRBAEUEqJoqgVuq7XGobh0XU9oyhaVNP1HlEUktcKTimlkGVZ6u8f5Lv+8AqvrKyglJLcBAAEIAcOHhbOTK0cBIAJwLjy1bkxmblnAEDnk3aoIAiQJBGKquZrmj7HMIx8wzBChJATuq7DNCf2q724oiiCMUZUVfMoAqvRdN2j67pICNGzWWXYMIwBWZZ1UZzedDLGmKKo7NDRE+aCeXMYpXS8XVEQcOJks7TjuRcFEFypHBSAnhvfNYVSAlEUoOt6vqbpCzjnpZxzgXOuaJo2rOv6eVEUE5PH+6eKKIqQRBGGYfg0TV9gcu7nnLs451lN03oAXGSMqVcoCwHAct85pljTqRBPSikMw6w5e+7CfRcvtt115OjxBZqmu5PJFH7x+G/gdDghCAy7//haJkPE9ndVz30Uwd5KYzTwIJJjZUYq3iPMmP80DO2/R0EkSYQgCAV9/QP3Dg0FPvjzX7XN4pwXmyYXCCHmkSPHFd0weirKS7tMk79IKXlJkqR+Sul4gJqbKALgCVmW5vX29WtDgeFSW6FEUURnV/diVdOPybI81fHJAHwOwB+u+P1WAP8JQMu9fxTAfYyxEUKszdffP7DhYmv7x3f37VlNQGoM0xQA/mvT5A/IsoyZDfVW3GNtLi+Ada2X2pYlk8mbf/PU78opo9WGYQrgnIIQvnffwYSuaz26bpypqqx4ury89GUr1rqmG/jvjLHbstmsdrq5xT2+GAJDJDpW8NzOl3YTApNS9qbpB/BtAP818SsOPmmTU0ohCAJSqczG0dHQh4cCwTWUkgZdNwTOORLJFHa+uFvjnHdUVVYcKvDn/1ISxYO6eeVZc32xrBuj7R2dt3V0dT/Y3dM3t7und6ZhmJJpmkilUhgaGh5jlHa53K7dhmFsp5Scyq2/F8DTACphKQYD8DUAT00ey2ShlLJ0OvWhl3a9/IXo2FijIAjjVpwxBo/bmkrTNJHSufPDC4oWvit4+PtqXsETdPbyR8zuc1+iohR0ePPSupK93hoBmKaC2IrvcDhwtuX8miNHT357dHR09YR7Me7vUYVzJwiZ29nVM7ejq+d2SRS7/P6CPwgC+2ZlZUXP/HlzcOToCcTicc4YqwWwgDE2nouwRdcNH6N0yTW65Z3id34A8yZ+5EFKKVm+dDGGg0HfwUNHvjIwGPikoiiCIAi5sREAMG3USRBEZLPKotHR0F3HT5y+N5FMzstkshCEKzYrIYCFShVQSguOHj+55NTp5gfr6+te2nLLps+5XI4L1ploIVdXnJ4zAcy3LcfkvxmmKQJougZ4UT7RBQLDMGAYBkCsDZXNZquHhoNfaWvruFfXDZcgsPH27VxPzvrNbWvvmCsIwvsN3Xh8zuyZ/8IYHb3GfF8mjFIIjDXtP3joS2Nj8ffqugZRFKHr+nhbum5C0/R8QsjSRDK5dNfuVz5VVlb67dmzGv+DMpYBIYsmjwdAvv0PSikaG2eOAzKiKPqaW85/o6+v/yHTNCfFoxOWxjBMgFIoJnB3UxX+1tkNfSRAya33b6fFFS+QoY5NKSLRk7teRHV5CSRJAuccNas2X3Wc01IQw7A6dO5C6w3/+6c/36GqWokkibm/GdA0DZQS6LoBUbTgS9tSmKZZ/8ahow+7XM4t4OTvZYf8vKpp4BwwzYljayrf9Wrm/xpuwWXHoK4bal1tdVoQhNK2ts4n+geGNkuSCEmSLvvQuGUDcKH1EpLJ5Ec6Orv/VsjBqpKUswiEgJs8t6n5ePxBCIFDlsE5R1tbx+1Dg4H599/3vg84ZMdRVVMBEHBMLCTn3DBN803KAUz4G1ON0TRNTHYXOefQc54CIRSUkrkt5y8+FovF1+QgZOuZ3LoQQqDl5l4UhRyqyD1Hj5385MDAYOONN6z5KGNs4GqTa4soCAgEhu/t6u797lgsXi4I7LI5VTUNpmEthQ1pM8aQTme8be2dX3ri18+svPuuOz5PKb0SyjOsddNRVVWJstJihMMRCIzljY6GfjQaCt/PcmmB3PqCMQpBEAY4SLik2DeWTsRJeVmp/9MFYwvMwCgM2QXy+u++REprb3OMBbc8V7y2/7heuvaDy7YdcjqdME0TNdcY67QUpLu7F5qm5f/yiae+r6pqiSxLMAwOw9C18rLS0zPqat9IplK9lRXls3r7+ut6evtm67rRoGqalesQBACkID8/r0+SJDgckj04BYAKgOu6LnLOJx+bXJYlDSC2fzoupmmqhJD09fotSaIyGgoX/OvXv/ndUCi8WZatReScQ1HV8b5RSgVVVVFTXYVNG29CW1vHM13dvQ9TykTD0EEIhSyLmmGY/S6vK+X1emOcm3RsLJavabrfNM0y0zTtuAqpdLruuZ0v/bLA59soO+RhXddRWloCl8tlTboghGVZVmVZNg3DEEzTvGwdBEHQKKWT4ygAgG4YYIxFgZz10HVwzkEpAwEaR0ZCv0xnMittF49zDkkSE3NmN+7p7u49m0qnyZzZjUwQhBvb2jvXqqrKRFGEwyFjKDC8+cTJ048umD/3XodDTl7N/RAEEelM5v7zFy79yDQNnx136boOxljW5XJeXFg/r7Ow0B/mnGM0FC7u7ulryGazCzVNJ5IooqOz67af/+rX61VVlQX2JjcSjDHMnzsHlDIIgkj6B4b+fWQ0dL/tgnPOoWk6ystLX6+uqvz5jLravc1nmke//t51fuee32yilfJc96WeBRrLrXd0ZJkQ7F0WqpyDJ88HZ8QyfT/fumrJVk91ZY85iakx5Xivs8cAAE1N8/HiS7tvHxoKLHW5XDBNDkkSYytXrPqsruuPb7llozY4FMBNN92IZ597AXW11T5F1W6+1Nb+/pGR0F3pdFbatGH917Zsvvl0VlGwatVyy+yDPABAFiVR//3257+0/8Chj8myDE3TMKOu9sRDH//IB0RJNEzDoJftFQKzv29gOJlOXxUlIQA0Tc/r7x94NBSKbBZF0XYv4HK5OpYtXXS0v3/wOGMsVVJS0qZpGlLpDFLJJCoqSk9XVZSf7R8YnDejrvaIrhs7N2648dTpM2fPhiMRpX5GrWoYOjmfSks3rl1T0Xqp7Y7RUPiT6XS60QIBJAwPj87Zuevlv7txzarPZbNZUMYwo9aNTCaLu++64/N3bNvy7y6XS92778A9O5594buCIMAwDHg8nuinPvnxbYWF/oBhGJf5WZxz4nDIwWxWAecc2awCxihUVXG3dXT9IJlKjSsHIUBRYeHTpaUlX1vYNO9sIBBEOBLFwqb5KC8rZUsXL7xh7/6D/9HbO7DKTs52dffc9rsdz//Dxx/80Jds982mgViKSDEyMrr6/IXW75gm99mUFMMw9PLyst1zZs/6YTA4sm/NmpXZJYuaYHITh46cQF1ttUM3zPVHjp54MBaLfUAURUSjY+6pEEDDMFDoLwClFNFoFK/vP/ThC62X/mayhTIMgy9Z1PT10rKSr2V1I7V2VjUenukQnCd2ftNsnH+fGRqEriqAZLlhxDQhFJXj0UQx+sN9ILo6+7FfPvGNrVtueUDXDW3pwnm4mkxLQfYdeAMXW9u2Tpg2HbMaG/5348z6x06fOQtVU6HpOjKZLBRFhSRJMUmSdixsmr9jeDj4ruhYbGt1dcVjI6EQDN1AVVVFzqpgiFKKwHAQkiQFbSXgHHA45GQqne6q9ldatI3JgSghGBwcAiUExUVFV0U7kslUSTwe35JDc+BwOIIbN6z7Tnt752M3b9oQeuXVvQgEhsddqMWLmtDUNA+MsWz/wOAXDx85odTX1+0Ph8K6wyGP+6wAt2hSJnSXy9khCMJ379i25ZV9B954amRktIkxBlESMTAwdH9ff/9PCaGdA7n+1tXVwuVyRQsK5OjAwCBSydSAHQ9xDkiSqLqcjosulzMmisJlSVFCANPk0HUdXV09iMcTcDgdOHHi9MO9vX1bbL/cMAzU1FR9HxyfJgTIZhWk0xmkMxmkUmmoqmZ4vO79D3zw3tt3vviH7efOX7xJkiSIooi2to5P9fUP7Jwzu/GkrunIZrIIR6KwQBbT8cz257+maVqxvWE5oFSUl39j9uyZXysuKlSGh4NQFKs9k5tQFAWiKGYJMf64ZfPG1y62Xjp4tuXCvxBCiq56uFGKRDKJaDRa/OKul/9pErADTdO1VSuX/tva1Su/fPrsOdy+ejFWL5wNOiTWKslkBVIXLvJEtAyUFlibVYOU79ceF2aJ25sH4SAAkWW0d3S/t7LywuMV5WUvXWvvTwtgP/jGUTI4FKiZgG0JvF5vCyUWYhIKRxGPJ5BMJsc3sE04kyTphUVN8x+WJCnW19ePoUBgPJDjnKOrqxuDA4PgnF+prDQSjqD1UjtUVbVPKuu9ue/5+T54vZ6rxiSEWObaMAz4/f5LG9bfcPcNa1d9g4OHstmsFdzCMtkmt0h0oihBYAIWNi34g8Ph2KMoiu5yOWGaHOl0BplMFgODAQwFhqHpGkZGRpGf70NhYcH5FcsWP8I5TwFWEBuLxSsIYQvnz52DeXPnQNN0aJoGSRLR1d2DY8dPQtO1K7FwoqiqPDIyikwmC87NiXHrBiilGB4eQSQSAaUEY2NjVc0t5x+y10ZVVSxetPCFO++47TPrblyTo6+IuHXzRtx95+2Y1dgAwzCgqhokSQzfcvOGT7jd7lEj5yJms9mCffvf+Jvunl60tncgmU6hpKQYFeWl6O7u29zd07txcvxZWVH+6Iza6q8YhqHo+tTIqRUH6SAgRlFh4Y/qZ9R+Dm+G6GHPm64bGBgcwunmc+8fy6FV45uCEiWdzhzs6OyGJIrw53ngkCSYDnePo6p+i6SklrNF67eSihknYBpgReVJ/c5PbjgmVX5FTyc4obZSctbV3fs/8vLypKn6Ycu0LIjH7eJjY6I+jhaYBiRRXFtZUf6bM2fPITgyimxGwYEDhy03BgSCIELJbWwrMOTjwdVoKAxJFJFMpTA6GoLT6ZyyXSYwxONxtLd3orGx4TJLQglFWWnJdfvOOQehZGjb1ls+wk3ziK3EV4ppmlBVFbquAxzIZrPQdR2GYeROQQHJVArJZArxeGI80B0YHMKaVcvhdDrQOLN+/8yZ9Ufb2zs3iaIIJjAMB4M3U0afNXQdqqohHInA7y9Aa2ubBVGSN59RNkARDkdQWOiHJIkwTZ47VEwUF/lR6M+Hy+XCzhf/8J5YLF7vdDrseCR+0/q1n1t/wxpTUVUEgyMQBAafzwdKCFRVRSqdhqKoiIzFIIli25LFC3928I3DX2CSBEmScKG17dY1a1YW5/vyRru6erFn74GcC9Z7vxUzWP1zu91d77lz27/neb2Goiho6+i66jrYwfVdd26Drum/ePSxx7eeO3/x3jcBJgDcbhccDodw4ULr7VdC3YQQd29v/7eaFszbWupyDV8IRDC3thJcdhnHaYnhYMXq4uqGY8bCGz6mvfTzNzBvpUPW0lg3f+Y3W06eujubTi/IBfYYHg7e3NvXPwfA2av1e1oKsnnzBuzZc+B8V3fvJqeTwSHLOHTk2EdbL7UPlZWVPOZ2uYKGbqNZFOFIBNXVVRgOjsA0TJBcDsQ2k4ODQ7mf6bjSXGti44kE2js60TjTUhJd15Gf74PHc3XrYYuu67jxhtXfqK6qOJJIJOFxu6FdEZjpuo48rxfgwPYdO3HuwkXU1FRBVVVQQmEYOmRZAmMUhBAiCML4eERR5JIsw+v24NjJUyY3+TFCyCYAEBhDX39/xXBwZNwCZrIZlBQXjeP3V5MrlcRiOWvYt/8gItEoBAsdoufOt94tiNYcapqGxYubdmez2dbWtnYUFxXC7XaBc450egLTsIASB1wuJwYDw1i+fPGvm8+2fDqTyboppdB1vfLYsZMbBVF4pqqyAjfesBqZbFY+cuzkLHu9VE3Dwvq6pwsLCoayqgpBEFBXW41z5y9eNg7OOVKpNNasXoHq6irIkgSHQ8bmmzf88Oy5C++Flf+47PlLlzpgcnNGMpVedSWLgFJKxmLxRR6Pe3HjzPrdiqrh0V37sWb1SrzhrEcwX0agJ4o78otbNF07oO/53QrXg1/MUGQTRYX+Xf2p1AJ7ftOZrNPr9SzFn6sgHo8HdXU1z0mHxb/mnDtz0KYzOjb2b6l0+n5Zll/y5Xlf9Ho8x0RByE4EbzoEUUS+z4e+vgGsXrUciqIiFA5fVzEmC2MM8XjiMktSOg3rYblWBRfWrF7xpCiK8PsLIDCGmuqq8Q2rKAo8Hg9uWrcWeV4PYvE4wpEISkqKbai6emwsvuLU6bM3JpOpBQB8mCCD8Vg8HrvY2jYwMDB4qq2jq1USBY99EBBCkEymXYC1OS3woQaSJOFq7shksZUkEomioCAfum5gzpxZVoKOMsQS8YLX9uyvZ7lT1uQcixc2Pbt5003IZLOW1bnKuzksbtyCuXOg6fqF5wt3Xezp7V+ec7OoIAgN737XNoyOhJBT8HqAN9jhnizLoIyee33/G+N5GAAoLMgHpcyiQoBAFASUV5SBUIru7t7xg8Xldp0rLysNjI6GqmwXyjRMeD0ebNl8M5pbzpe+umdfwVTMbcqo6nI6FZ83D3v3H0RnVw9u2rAOqVBw0+hoWD0cUQ5ukcc4rZ71O2Hllq8r+aWnS7mJDevXHnziyd9+BoAI2G5wrPxNDUySaSlIV1cPPF73vrKy0p8EAsOfmRw0qao679jxU/PcbuffyZJ0pn5G3etMYH8ghBxmTEjbJ6VtXby5TWjHIdOVCUvShZkNM8aLeq4lnHMU5Oe/3NnZHVHUiboSj8cDTdNQUJCPWY0NWLl8qZXkMvQc9V4EIaQuHk98cigQeG8mk61va++EOIl9bMdQ4XAEweAIDNP8mNfj4QCUt5OSbrfT1zcARVFzCUuLn5VKpho5UGE/I4kSevv6t7zw0ssVmq5PzfOZYpoAQDcMr+3tEUKgG8biTDqD4WAQnV09oJT6NV13221RStE4syHodrsxKZ0FkusbNzkUVcGMuhrMqK2BblwecgiMRV1O51mT83EmJ+ccLpcTgiBA1/WGqXYH5xyyJMXKykrbKyrKoaoaBIHh5T/u+ehLu//4aF1tzQ+CBQUH2701mLuw5heEUnQMBnC0M4pYOHSeEJJBTkFy/b0mhWBaCrJy+RIQQoxZDQ1f+NFPf57u6+v/jKIoLkmSxoljmqYzVdWWnTzdvMzhcHy2p7f/RFGh//GiosKnBUEYsSeWMYa8PC/C4chbJrJZliQORVHgdruvqyCEEH3F8iWHS4qLxk9sO2Hn9Xrw7tu3QpJEqKoGwzBsFwq6rm88dar5R7F4fK6t4LavrGmaBXvCUjZKKURRhGgl4QgAx9tN0KOUIhKNIhAYHre8ViVhttAGN2z26p69Bz6i6zquajquIg7ZAYEJ4+8eGxsrvNjainBkzJ47Bj7BqiAAXC6nmuf1jIMdAMaVZ9fuV3HxUhv+x8c/AofDAVXTrM/mlsxi3XJtMjGbEAJFVREKhZBMJl1TzSMhBNlstuj325//VHdP7z9KktjYeqn9oSNHT/ydpunmjWtX76itr0dUjUHUsoDDjR89/QJ+f/wifC4n8Xo9/K3wz6alIA6HDEoZDMPIzppZ/88b1q998eCho490dfXcrKpqCQD71IUkSTAMA+FwZHk4HFk+HBz5qNvl+qogCNvtCfR6PIjHE2/ZigATRMdpijIaCp8Gx2UnGOcmykpLcqiNMvFuQkEIWRMMjv6Cc15rb0ZLeZgpy3J7eXnpYJ7HE2OCoGcyGU8ikfSGwpEiRVHyCaVlbwf570qxMuAWjD6ZIqMoypushMUUmK7xuFwmHzhZRXGMjIaZJIlGbU0VdN1IXGprNzjnjBCLGdDZ1VNkIXzm+OfzvF5cauvA4NAwFFXFa3v24fbbbkUylYau66CU2ACHS9eNuZOXn3MOURDgdrshSZJ2tQNQFEXScv7iJzq6updwzhcnEslizjlKS4uHEonExZazLajKd8OlSOhQFKj+cnzwvbOQiMfNE6fOkLdi4aelIBYWb8IwTHDTRHFx0ZE1q1YcAcdsv7/gXaOjoXf19PbNBlCqaTpEURg/6WKx+OI/vrr38WVLF5WKovhjO+Ps8bgRjY69ZQWxKRrTKQmRJEl/49BR0zANkNyRqmoqGhsasPnmDZb7ksszUEaRSqVdZ5pb/sMwjFobNtV1HcVFRb/ZtHH9L8Lh8NG8PG9i7pxZcDmdCAwH0dXTyw4fOe66bcstBZFoZNWx46fuzWaVe97SoK4jnHM4HQ7k5/vGDwfGKNLpbPbKZ98O945SCocsK3lej1lWWoJ5c+cgq2QHD7xxOMh5uto+WLLZ7OxNG9Yhk8mCEEDTdITCYQQCwRxqZT134eIlaLqGZDKFrKKAUoZkMlkfCodrJkO4hBBoug6fLw/5Pl/n1RQkl8TMj8cTm3OESaiqiqLCwsDmWzaFRkdH0dM/iB2dERR4PVi1cgWaFszF+Qut1UePn5QmzxEHv+aETUtBGGMIhyNIpdIwuZVVVRQFIPzSyuVLLwWCw9/x5XmrTfDN4XB0ayAwvM4wjGK786Zpus40t3xt5fJlZxYumHdI0zUwgSGRSF5mnq8nNntz1+5X8b677xz3z6cS0+Rwux2pmurKzORTXdN1VFdVYiwWvwzNkiQR7R1dG7t7+m60C7gURcGmjev/o7Sk+POyLHFJlqGoKrJZJXeCq9A03TAMI+HL8yYA3lddXVXQ1tZxz9vpZnHOUV5eitLSEjDGQKk1r7FYYvC1vfsShgFvjlrC33X7lv85e1bjUVVTp4+CwIodckwxmIZJi4sLwxXl5ZwQgq6eXmSz2RGX09kajY5VA9ae6O7pe5/T6fhhcVFhEgBe2vUKBNFiEmg5l5YymqO8SKiuzsfQ0DDcLjd6unvfk8lkHZNhXsooxsbieOyXTyKTyY76fHnprKK66FVcrclAD+cApcTMZDIwdAMnjp/Cgvmz4XLKEASGI8dO4MjREzcRQhwTnzHhcXvGrjUv06a7c84RjkRRXV01blJ13YCqqsgqqiHLco8oiT+rqij/GaN0fiaTeSgSjX7UMEx37uYN37ETpz5aXVVxKJPNTrtIyRZKKVLJFHy+PKSSSciyNJ5nmbK/4GCMaV6v1zAmIUaEUgSDI/jBjx+9rG3Lt1W22XwtXddRXlZ25t577vrK0FCAZzLZXMZfHH/ebptSir9YEHQAABSUSURBVEvtHUilMjAN0zXdOZ3uuLPZLJLJFBKJFFxuJyLRMQiMIZPJdsOi9HtzLhcRBSFaUV56MjoWmygtuFasRuxLJigMwxwfV77PB5/Pi+BICNFIFLJDxvx5c57r7R/YbNXTM4yMhJb+fvvOh1auXPatU6ebEY8n0VBfhyuX1I7jQqEwotExxOOJGy5cuvSJqeqFCAEaG+rhcrs6+wcGT6TSI+upcP1tKooievsGZj/5m2d+UlVZscflcuyMRmNNPb399zqdTkUSxVdHRkM3X/EZPZ1Kn7zWe99SPQilFKIgoLOzG8GRUVSWl4NQa4btxchksgBwvri46BGPxxPt7Or+X4wxSJKMru6eNU/85hmnYZoZQoCVy5fB5XRM6S0RQrgVb1h0el3XcebsOSxdsnD8wgPOOWxlu4oQ0zRhTtoguqLghrWrsHDBvPFTDrAgz+98/yfeYHAUtpI4nY6jp06fSWmaDpfLBc4nLJFpmnA6neCmicULFyCRTMLplDEaCvlMzsHeBgtiVy8ePHQUeV4vAsNBlJWV2ARLOGQ5XVdXe+bChdZ6SZLABAHHTpy+Ly8v76nq6kqIoohsNmujQrlxESiKApv7xTmHLMvYu+8AqisrMWNGLeLxBHx5Vl4oHIliLBaHnJXh9xfsyPf5Hkml0rOtZBvDqTNnv+DN8w6kUumnp6D1TywEIXA6nYgnEmvaO7p+xk1eRaeolCQESKZS0HQtU1Nd9VogMLx+unOlKErBqdPND5083fzX+T7ffk1VlyTT6XwCQJKkzwNgtktnHYClh8vKSy5e873TaRyYyITaJ0wsFsesxga0nLuARU3zsXzZYnT39KKouAgV5WUoLCxARUXZC06HQ7fQK4p4POFt7+xydnZ2o6u7F6ZpggoCmEVaG9/FhACGYQhjYzGSSCSRyWQwNhaHoqpgkzKrsiy/5RiGcyDf54Pf74e/oGD8q9DvhySKxA5uLKhTN/oHhjAwMIRoZAyGYSXuLl5qx+93vIBkMglBENA4swGbNqzDDatXCuB89bUCdfu+Kes7B+f8ygFwxphpzTPQ09uHYHAkF9dZ7IFZjQ2YM2smZjbMMGuqKp+zIStRENDd03sjIdg0q7EBiqLi3PmLGBwKgFKKU6fO4sSpMyAAhgLDSKfTCI6EoKoqurp6YXKzHLDatN2kbCYNUWAAN5HvyxtuWjD3e6qqavYccc79B984/NNwJPpZxmixTau3RWAMkiTC0I389vbOh0+fPvvU2Fhsrl1Ad6WYJofT6UBdTTWWLFrwa4fDEZwu8GGDRLIksVQqtVHT9XyHLNu1I2xyvzjnqKqq+Hkmk52aWmH3fzoNC4KAzq6e9c/t3PXA1ls3fVUUhD6r9NFAOp1BnteLrq4enDnTgqb581BRUQpF1ZBOp12arlN74F6vO+0vKFAMwwBlFBXlZfD58iAKIgYGBmNm7oSmlCESGSuklMnx+Fg2Fo+juKjoMlqGdWuI5e8qijJ1x6cQSRLxwksv4/Enn8YEL8eCbCPRMcP2iXNgwvx733uXEBwZ0ePxJIZHRqDrOhRFQSwWg6KqoIyivbMLG2+6ESdPNd/f1z+w8Ur6xESfrSy2y+WEpunIZa3HzVgOYnZeauvIK/QXhAYHAwDBZfdqGYaJsVgcc2bNRJHfj4rysuePnzx9OhodW5KzrPnbn3vxPzs6u+9Yv+6GQDyewODQMKqrKvHCSy/DMA0sWjAPLecvYMnCBZOqPPHwczt3fWLb1s3/KEnSbsBKpM5sqM8RJA0IAsOSRU0/HR0Nr7rY2vZXTqfDLoH1BQLBb0ajYx+UJXl3OpN5XRRFhTFGAsNBl2EYG1vOX9wSiYwtsunx1hxxqKqGKzeuoRugjKG6urpz7ZqVP35tz74vy2/xToIrwYrJbWiahpKS4gONDfW/v57yTUtBzracz//Vk7/9xsDg0Op4InFLdVXFl0VReE6SpBhjDNw0x3MC6XTaQopmNpAjR0/cl80qVJYlqKqCmurZ5269ZWM6qyighKCsvBSyJEF2yHC6nJ126ShjFJHoWI2qqut8vrxXhoMjYMwaYC73IsCyfqokim9JQQzDQHFxIZYsXnAZU1YUBASGg4dffmXPX9nM1t7e/nW7dr/6UULwKBMESKKIdC5usq2pjcgdOXri/a/t3f9dURSvupKGaaCsrBQLFyyAoioQGMPoaHjw5Vf2KABkxigSiWTe/oOHN23ZvLFrNBRCRUWZtVA5twqAlwCJgcEA8rxecPD40iULv75n74EnOecSYwzRaGxpc8uF39XV1X7a7XKdVFTVKupyyDBMA4RYVy45ZBm6ninf/uwLn+vu6XtE03T6+x07n1y5fOln6bq1T3LODUEQMLOhHrF4EgBHRUW5WVdX+6knfv20cObsuQ+IgsgsVxBQFGXZ8ZOnljHG/kkURRMAudTWQS62ttl3n8E0TXjc7kv33nPXZ/fsO/Ctrq6e2ZMPAEopkqkkXC4XCgp8uOXmm75z8WLb6uDI6G1vqur8E8QwDEiSHPrw/e//+8aZ9cmcMbyqTEtBDhw88vmhocBqj8eD0dHQjFA48kuP233c4/FszyrKARDSyoFIboBEEISFu3a/8lBvb/9DE0VKMGprq3dUVpRxRbGC64MHD8OulcikM515eV5D03SWS3q5n9n+/A/mzZ31DY/bc4pzkuacF15qa286f6H1A109PX9XU1XVrOYWf7qSWyAsXDA/h2JZn81dQ/TCgYOH/0lR1epcRp0+/8Ifvl9TXVG67sa1TwLotivkcvkYMZVKLxkYHHqwra3zw5RS17VuIBEFAadPn8WMmprxhFoylWqVJGlEUZRqG7QYGRn9Suuldh8B2QuQOGMsv69/oD4wHHyw9VL7f1FCtxNKcce2W1FWUoylixdt7+npW9PV3fu3jDEiigLGxmI3/Pqp3+2aM2fWY3ke97MAzgGw7isFcem6Mffo8VObWs63fiIUCs2UJOviukQiWdg/MPghQRCeIUDG5ByyLMHllBFPpmCaJlwuZ2LN6hUfCoejzZFo9H+lUmmPJIk2Nw0AoOc8B9vnt+Mdr8ez4+733PFPc2Y3tr7y2uvfmTw/truZVVR0dHZh2dJFAEeioqL04Xgi8StFUdb9OTC2YRiglMbWr1vzNw31dcdkWb7qrZe2TEtBxmKxjCzL3DQMYg84lUqt2LN3/wqXy2V8+3s/HlYUtSM/36cfPX5KBPjSeDzhsRvPZrNobGx4beGC+c8GR0btYincsukmiJIIWCjKmY7O7pc7u3u2OXKxhWkYs5ubz/3c6/Gkz5+/qCmq6jp3/qKYS5y5rgzApyOCIGB4ZBShcBj5Pt94AtFQDZSVlgzdtuWWr+54/sWfToq35K7u3q9Ex2KfZIwdKyr0B5OptJFVlIIXX9pdnckqyzOZjGQHvYRcnQJDCEEylQInlvuimwb8/oLovLmznz1y9MQjTqfDxvjLDxw8/E2vx5M9d+FiVtN0ZyqVknMHwa8AQFFUnDrdjDvvuA3pTMb0+fL+2ev1eJPJ1F8TYl22xzkvOXv2/P/jcbs+29nVeymTyQQ5gB/+5LHSZDI1Kx5PyKIoQM6VC2cVBbNmNbzy0Q/f/zFREjOT5/ay3AHnSKczvK62+j/vfs8de/fuO/jptraOzaZplhJCkFWsgq7x+MMwud/vPzF3TuNPU8nU4wDR+geGihVFvSxbXlhYGC8pLoSuGbk9ZnHYTNPszs/P+0gmo/wsEolsspPSb0V0XYfT6RxdtmTRw0X+gt8rigpZlq9Ldp2WgtTWVn/V4ZBbz7ac/3w2qyy2/VZZlqHrOhsOjlQSQiqt2zSsMmO7sk3TNFRVVR752Ece+OvqyoqMOin3YA10HAY0blq/9ovBkZE1iqIW2BtUEASk0mlXDueGLFvlupOD+rcquqZDFEXMmzc7l9Owfk8IQW1t9aOd3d15p5vPfZFRmmfVdouIxeJlIOTd4XAUAIcdZNpVcaqqqrdu3vTtTCbjOvjG0Ueuls3WVBX5+T74Cwqg6zoEQeDbtt7yra6unptD4ch8WZbGg81MVnGkMxmHfVMJYJ/E1tydO38Ry5YsQklJEQzDSLtcrkfyfb7YUGD4M4ZhUJbboIqqSumRkSZBEJoAYGRkFJSy8Qv7cv0wiwv931+6uOmLJSVFSV3XYdfkZ7JZ9A8M2vM+Xhrg9bhRWlJ8YsP6Gz5UkJ9fJUnCzfv2HWpctXypX5LlytHRUFcoFBp9z13vOhSPJ46rmppyyDJM00Bf/0DZWCxWOMFWMPX5c+d0NdTXWfU/sAL8dCYLcMA0zK7ZjQ0f1I26fz3T3PKApusuYRIn8GqiaVaM4/PlvfzuO277oqaqx5Xcfc/TkenBvByGLMtP33vPXa+cOn32gf7+wffFE4lVAESbhEiIhaPbLFlBEMAEITJ7Rt2vH7jvff9aUJA/ap8stlwZO9yy8aZT2axyz/ZnX/wG53y5FcgSEEJhBXR67j5bcZAxFppCQ64cjxtTsJIYozhy9CRmNsyAw+GwbsPIiSSKcDpd31y+dHFrcGT0y4FAcKllmomFtgl0onjLNCEAKCstbampqfza7FkNv/3jq3u/fIWv7JpolyEUieL119/APe99t20t4C8s6Lv7PXfc9/If9/xwcCiwzkr6AfY9Yaqq5erdpWhxcVGC5qgeiqKir38QJSVFAABN0zKLFsz7+wUL5h06fOT438fi8dWmYRDOJ1wdux+aroOYBIxSs6Sk+MCaVSu+F41Gn02ns9ANAzLG+V7o7u4b32iEEMRicQBAgb8Aw8ERKIoCp9Mx4HTIvwIB7vvgPfD7C/DGoWP47dPbUVxciHg8DoEx3PeBe1BQkI/fbX9+RTyRcLhdLsttczrCiUSid3BooqBOy91TNs7jE9jI6tUrHpIk6ZnA8PDHA4HgRl3XS0zOoSoKrFtiLJcwBx6ka2uqzixe1PQYCPm1JIlKNncr/nRl2nmQXC13xOfzfj8vb+5/1dZULXvl1b03FRb6F8QTybnxeMJHCLjT6Uzn5/vas9ns8Yb6up2iILZIkgRN03Blgf6V2q9a1XZ71q9fsyUeS3wgOja2TlO1uZlM1ikIglZY6O80TeONxYuanqMEXVO4Mi0AvomJe7FSAN4UwTPGEApHMDISwowZtZeZWc45VFVFTU3Vi2tXr9hzsbX9XX39Axs0XVsViUQLs1nFKcuSUljoH3U5XScrK8r2Ll7ctDMUCid37X4VmUzmBKXU7gMD0D+5bVEU0XLhIu5898SV+4qioqS4+Owtm266tbnl/D0jI6M3SpK0IpFMuimlZnFRYYAydjCTTj9bVVV5YXLpLyUU1g34xB4Aigr9OxYtnL9b1/Wt3T29G0RBvCEwHKzQcwxfh0PO1FfU9Zum+cbc2bNelWXpdb/fr0Si4fE+UUKQSqXR2dVjIW6Mguf+CwRRFEWHLGvDIyPo6OxC0/x5KCkpQjZt3TWVyWSRTmfGK0HBCbxeL0qKCxGLxRCLxV17Xz/wsCROJGXramv2ZTKZkUuX2scZkZQQlJaWjKON9tq4XM7XFjXNf83r8dT4fHkbWy+1z5o9q7E2lUr5XU5n7EJrW09FednwrMaGfZIknp8ze6bWfPYCdP2t3/31lhKFpmnmsq00XegvOOB0Og/ccftWnDt3wX3xUpuTEIKqygpl+bLFib2vH4TD4UA2k72unzdZdN2A0+GMmIb54+XLlvw4EAi4BoeGRa/Hbdy0/obkwUNH4HG7rnaB9Znc13XleqRHTdPAGEu73a6nb71lw9MjobDz2PET7mAwJOXlefXlS5ckGmfWZ9o7OiGJElRVQyqdBqP0BQAvXKttcYrMsK7r4EDWIctPLlu66Em32+Ns7+ySJFHgN29cHx8YDODAwTfGywbsW0vkHKPaFm6/i/O0w+HYsbBpwQ5fnte5a/cr+ZqmUQDIy/NqN29cH0kkkrqua9A0I/eZN/fJ6/VMYhATZLMK9rx+4EumYRT4fHn/AkJGCSFwOZ0ABxrq6xEYHoYgMMyoq8G22zbjj6/sQeOsBvT2pdHXP4iu7t4vDAwGltoADiEEMxtmvAACU5gUNBNCMBoKv4l3Z7l4GkRR7HM6HL+qranGI//zIXR19aCqsgzf+Nb3QUHh9xcgEolAVbXrMr+vJn/y1aN6DpVQFAW6rqdM00xZOL4BRVEnSIV/gtifVVUVmqan7XrsbFbJ1We//YzZqcRO6imqCk3TMqbJM/bvNU2Dolj9GS8D/jOJgnZ7udr1jGEYGSO3Ke37rN6K2Le4aJqW4ZyP+xb2STxO3Z/ixYQQ+P0FKCz0w96hDoeMo8dOLTp67ORDnPMivz9/ZUlJ8Y8YY7sYYyOUWlCyVT5gwuFwoKAgH5FoNFe16fEfOXriH9s7uv7BjtE0TUNlRfmJbVtvec7pcl62tpRSpFJpnG05N2Uf7fmy8nFpZLOW5TIME4SSt8Tzu5r8RW93f0f+PyDE2njBkVDOMk0wCwA4fr9j59c5eFEOEl4eiyV+EYlEO+tn1O12yPLLjNEeSmmIUpoAAM55HqW0uqenb03/wOCDoVB44WRGhiCwkS2bN/19cXFRMpPOgomXu+FFhX6rtJr/ZQ7FK+UdBXlHxoXkLmM4e/YcItExXMaitXJTfkVVCXIghcUsBiKRaMNoKPwwOH/Y58tLDQwOJSRRzAAgqqY5k8mUv6u7V7QvSwAsNE5gLFxRUf4Zj9e9z3Ix+ZTu1J/qHr0d8o6CvCOXC7fyD6lU6k0uo8PhGFrUtODugvz8j/YPDH42Eh2bAW4lWe04JZVKuxOJlNve1CSH/tkuleVCaigs9LdVlpd9Lqsoz78drtB/l7yjIO/Im8QGMKbiM2UymcziRU0/2rhh3W8PHDx8X1//wJ3R6NgK0zTzJj439XutmyPdA/Uz6p6SZfl7Doc82NfXP/XD/5fIOwryjrxlse4EcIX9/oIfeD3uxyPRsTlOh7zlxKnmmQDelMTlnBNBEIwb1646qar67jWrl3fsef0Apvv/qfyflP8XScwKStDQNQkAAAAASUVORK5CYII="></image>
					</g>
				</svg>
			</div>

            <form 
                class="pos-relative bg-white shadow rounded-lg p-8 max-w-login mx-auto login-form"  method="POST" 
                action="{{ route('login') }}"
                >
                @csrf


                <h2 class="text-2xl text-left font-normal mb-6 text-90 h-sign">Sign in to your account</h2>
                
                <div class="mb-6 ">
					<label class="block font-bold mb-2 login-email" for="email">{{ __('E-Mail Address') }}</label>
					<input class="form-control @error('email') is-invalid @enderror form-input form-input-bordered w-full input-email h-10" id="email" type="email" name="email" value="" required="" autofocus="">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>
                
                <div class="mb-6 ">
					<div class="mb-4">
						<label class="block font-bold mb-2 login-email d-inline" for="password">{{ __('Password') }}</label>
                        @if (Route::has('password.request'))
                        <div class="ml-auto d-inline align-right">
							<a class="text-primary dim font-bold no-underline" href="{{ route('password.request') }}">
								Forgot Your Password?
							</a>
						</div>
                        @endif

                    </div>

					<input class="form-control form-input form-input-bordered w-full input-email h-10 @error('password') is-invalid @enderror" id="password" type="password" name="password" required="" autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>



                <div class="mb-6 h-9">
					<button class="pos-relative h-10 align-right ml-auto btn btn-default btn-primary hover:bg-primary-dark" type="submit">
                        {{ __('Login') }}
					</button>
				</div>


                <p class="fake-legend"><span>Or sign in with</span>
				</p>


				<div class="signin-with">
					<div class="customBtn customGPlusSignIn text-center">
						<a class=" btn  text-center" href="http://127.0.0.1:8000/nova/login/google">
							<span class="icon-google"></span>
							<span class="buttonText">Google</span>
						</a>
					</div>
					<div class="customBtn align-right customGPlusSignIn text-center">
						<a class=" btn  text-center" href="http://127.0.0.1:8000/nova/login/linkedin">
							<span class="icon-linkedin"></span>
							<span class="buttonText">LinkedIN</span>
						</a>
					</div>
				</div>
            </form>
            <div class="pos-relative text-center p-8 max-w-login mx-auto ">
				Don't have an account?
				<a class="text-primary dim font-bold no-underline" href="{{ route('signupcreate') }}">
					Sign up
				</a>
			</div>
	</div>
</div>    
@endsection
