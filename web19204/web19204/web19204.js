import { LitElement, html } from '@polymer/lit-element';
import { Web19204Style } from './web19204.style';

export class Web19204 extends LitElement {
  static get properties(){
    return {
      
      
    };
  }

  attributeChangedCallback(name, oldval, newval) {
    super.attributeChangedCallback(name, oldval, newval);
  }

  
  

  constructor(){
    super();

    
    
    
  }

  handleKeyPress(e) {
      if (e.key === 'Enter') {
        let name;
        let id;
        let index = -1;
        const value = e.target.value;
        if (e.target.name.search("::") > -1) {
            const varCount = e.target.name.split("::").length;
            if (varCount === 2) {
                name = e.target.name.split("::")[0];
                id = e.target.name.split("::")[1];
            } else if (varCount === 3) {
                name = e.target.name.split("::")[0];
                index = e.target.name.split("::")[1];
                id = e.target.name.split("::")[2];
            }
        } else {
            name = e.target.name;
        }
        this.dispatchEvent(new CustomEvent(`${name}:enter`, {
            bubbles: true,
            detail: {
                type: "textinput",
                name: name,
                value: value,
                index: index,
                id: id
          }
        }));
      }
      let name;
      let id;
      let index = -1;
      const value = e.key;
      if (e.target.name.search("::") > -1) {
          const varCount = e.target.name.split("::").length;
          if (varCount === 2) {
              name = e.target.name.split("::")[0];
              id = e.target.name.split("::")[1];
          } else if (varCount === 3) {
              name = e.target.name.split("::")[0];
              index = e.target.name.split("::")[1];
              id = e.target.name.split("::")[2];
          }
      } else {
          name = e.target.name;
      }
      this.dispatchEvent(new CustomEvent(`${name}:keypress`, {
          bubbles: true,
          detail: {
              type: "textinput",
              name: name,
              value: value,
              index: index,
              id: id
          }
      }));
  }

  handleChange(e) {
    let name;
    let id;
    let index = -1;
    const value = e.target.value;
    if (e.target.name.search("::") > -1) {
        const varCount = e.target.name.split("::").length;
        if (varCount === 2) {
            name = e.target.name.split("::")[0];
            id = e.target.name.split("::")[1];
        } else if (varCount === 3) {
            name = e.target.name.split("::")[0];
            index = e.target.name.split("::")[1];
            id = e.target.name.split("::")[2];
        }
    } else {
        name = e.target.name;
    }
    this.dispatchEvent(new CustomEvent(`${name}:change`, {
        bubbles: true,
        detail: {
            type: "textinput",
            name: name,
            value: value,
            index: index,
            id: id
        }
    }));
  }

  handleClick(target, owner, e) {
    let name;
    let id;
    let index = -1;
    if (target.search("::") > -1) {
        const varCount = target.split("::").length;
        if (varCount === 2) {
            name = target.split("::")[0];
            id = target.split("::")[1];
        } else if (varCount === 3) {
            name = target.split("::")[0];
            index = parseInt(target.split("::")[1]);
            id = target.split("::")[2];
            this[`${owner}SelectedIndex`] = index;
            this.requestUpdate();
        }
    } else {
        name = target;
    }
    this.dispatchEvent(new CustomEvent(`${name}:click`, {
        bubbles: true,
        detail: {
            type: "button",
            name: name,
            index: index,
            id: id
        }
    }));
  }

  handleMouseOver(target, owner, e) {
    let name;
    let id;
    let index = -1;
    if (target.search("::") > -1) {
        const varCount = target.split("::").length;
        if (varCount === 2) {
            name = target.split("::")[0];
            id = target.split("::")[1];
        } else if (varCount === 3) {
            name = target.split("::")[0];
            index = parseInt(target.split("::")[1]);
            id = target.split("::")[2];
        }
    } else {
        name = target;
    }
    this.dispatchEvent(new CustomEvent(`${name}:mouseover`, {
        bubbles: true,
        detail: {
            type: "button",
            name: name,
            index: index,
            id: id
        }
    }));
  }

  handleMouseOut(target, owner, e) {
    let name;
    let id;
    let index = -1;
    if (target.search("::") > -1) {
        const varCount = target.split("::").length;
        if (varCount === 2) {
            name = target.split("::")[0];
            id = target.split("::")[1];
        } else if (varCount === 3) {
            name = target.split("::")[0];
            index = parseInt(target.split("::")[1]);
            id = target.split("::")[2];
        }
    } else {
        name = target;
    }
    this.dispatchEvent(new CustomEvent(`${name}:mouseout`, {
        bubbles: true,
        detail: {
            type: "button",
            name: name,
            index: index,
            id: id
        }
    }));
  }

  handleChangeCheckbox(e) {
      let name;
      let id;
      let index = -1;
      const value = e.target.checked;
      if (e.target.name.search("::") > -1) {
          const varCount = e.target.name.split("::").length;
          if (varCount === 2) {
              name = e.target.name.split("::")[0];
              id = e.target.name.split("::")[1];
          } else if (varCount === 3) {
              name = e.target.name.split("::")[0];
              index = e.target.name.split("::")[1];
              id = e.target.name.split("::")[2];
          }
      } else {
          name = e.target.name;
      }
      this.dispatchEvent(new CustomEvent(`${name}:change`, {
          bubbles: true,
          detail: {
              type: "checkbox",
              name: name,
              value: value,
              index: index,
              id: id
          }
      }));
  }

  handleChangeRadio(e) {
      let name;
      let id;
      let index = -1;
      const value = e.target.checked;
      if (e.target.name.search("::") > -1) {
          const varCount = e.target.name.split("::").length;
          if (varCount === 2) {
              name = e.target.name.split("::")[0];
              id = e.target.name.split("::")[1];
          } else if (varCount === 3) {
              name = e.target.name.split("::")[0];
              index = e.target.name.split("::")[1];
              id = e.target.name.split("::")[2];
          }
      } else {
          name = e.target.name;
      }
      this.dispatchEvent(new CustomEvent(`${name}:change`, {
          bubbles: true,
          detail: {
              type: "radio",
              name: name,
              value: value,
              index: index,
              id: id
          }
      }));
  }

  handleChangeRadioGroup(e) {
      let name;
      let id;
      let index = -1;
      const value = e.target.value;
      if (e.target.name.search("::") > -1) {
          const varCount = e.target.name.split("::").length;
          if (varCount === 2) {
              name = e.target.name.split("::")[0];
              id = e.target.name.split("::")[1];
          } else if (varCount === 3) {
              name = e.target.name.split("::")[0];
              index = e.target.name.split("::")[1];
              id = e.target.name.split("::")[2];
          }
      } else {
          name = e.target.name;
      }
      // this.state[groupName] = value;
      this.dispatchEvent(new CustomEvent(`${name}:change`, {
          bubbles: true,
          detail: {
              type: "radiogroup",
              name: name,
              value: value,
              index: index,
              id: id
          }
      }));
  }

  handleChangeSelect(e) {
      let name;
      let id;
      const value = e.target.value;
      if (value !== "selectdefault") {
          if (e.target.id.search("::") > -1) {
              id = e.target.id.split("::")[1];
          }
          name = e.target.name;
          // this.state[groupName] = value;
          this.dispatchEvent(new CustomEvent(`${name}:change`, {
              bubbles: true,
              detail: {
                  type: "select",
                  name: name,
                  value: value,
                  id: id
              }
          }));
      }
  }

  render(){
    
    return html`
    <style>
      ${Web19204Style}
    </style>
    <div data-layer="bda81359-9bcc-4664-86bd-10c88cdfbe37" class="web19204">        <div data-layer="b25ef33c-ec6c-4d6f-b871-b4fe7032706b" class="rectangle8"></div>
        <div data-layer="65010dbd-7eb4-406c-be1e-f8c40c4a5e06" class="group4">            <div data-layer="a7c25a62-b674-458d-a893-04b3b079699a" class="group3">                <div data-layer="7290924d-9ab0-4dab-a03a-d7beff84454a" class="group2">                    <div data-layer="5cef194b-d3d1-4ea7-9c27-75533358fe14" class="group1">                        <svg data-layer="410b7aa3-a6be-4d43-ba67-dfd1d30f84a7" preserveAspectRatio="none" viewBox="-85.76631927490234 1464.38037109375 2194.982421875 173.37353515625" class="path5"><path d="M -85.76631927490234 1559.676391601563 C -85.76631927490234 1559.676391601563 -69.8836669921875 1639.089599609375 69.8836669921875 1635.9130859375 C 209.6510009765625 1632.736572265625 530.4805297851563 1559.676391601563 530.4805297851563 1559.676391601563 C 530.4805297851563 1559.676391601563 1165.78662109375 1651.795776367188 1356.37841796875 1635.9130859375 C 1546.97021484375 1620.030395507813 2109.216064453125 1581.912109375 2109.216064453125 1581.912109375 L 530.4805297851563 1464.38037109375 L -85.76631927490234 1559.676391601563 Z"  /></svg>
                        <svg data-layer="adb434a6-791f-4ee3-8183-f2d3b4511654" preserveAspectRatio="none" viewBox="-114.35503387451172 1924.1993408203125 1988.39697265625 140.5443115234375" class="path6"><path d="M -92.11937713623047 1924.977294921875 C -92.11937713623047 1924.977294921875 19.05917358398438 1915.44775390625 162.0030364990234 1963.095703125 C 304.9468994140625 2010.74365234375 556.0955810546875 1987.485473632813 556.0955810546875 1987.485473632813 C 556.0955810546875 1987.485473632813 724.0364379882813 1948.558837890625 806.3385620117188 1950.783203125 C 888.6406860351563 1953.007568359375 1095.50830078125 1979.7001953125 1178.922607421875 1981.924560546875 C 1262.3369140625 1984.14892578125 1717.22314453125 1957.456420898438 1756.149780273438 1960.79296875 C 1795.076416015625 1964.129516601563 1809.534912109375 2010.007446289063 1827.329956054688 2026.412231445313 C 1845.125 2042.817016601563 1860.695678710938 1948.558837890625 1860.695678710938 1948.558837890625 L 1874.0419921875 1999.719604492188 L 1827.329956054688 2064.74365234375 L 1648.618408203125 2026.412231445313 L -114.3550338745117 2001.213134765625 L -92.11937713623047 1924.977294921875 Z"  /></svg>
                        <svg data-layer="f35b81d6-d505-4b36-ad46-6ea5d72704be" preserveAspectRatio="none" viewBox="375.9202575683594 1560.067138671875 354.2325439453125 57.9359130859375" class="path7"><path d="M 375.9202575683594 1560.067138671875 C 375.9202575683594 1560.067138671875 455.4418334960938 1620.794555664063 534.9634399414063 1617.902954101563 C 614.4850463867188 1615.011352539063 730.15283203125 1571.635864257813 730.15283203125 1571.635864257813 L 375.9202575683594 1560.067138671875 Z"  /></svg>
</div>
                    <svg data-layer="29686f31-33fe-4fbc-a395-5bb1b2adea69" preserveAspectRatio="none" viewBox="1722.19970703125 1926.892822265625 227.18212890625 91.250732421875" class="path8"><path d="M 1757.479736328125 1942.395751953125 C 1757.479736328125 1942.395751953125 1845.679931640625 1921.29443359375 1872.4072265625 1928.328369140625 C 1899.134521484375 1935.362060546875 1949.3818359375 2018.1435546875 1949.3818359375 2018.1435546875 L 1722.19970703125 1998.12451171875 L 1757.479736328125 1942.395751953125"  /></svg>
</div>
                <svg data-layer="3867a28a-efa6-474a-a31c-2881a134dbdf" preserveAspectRatio="none" viewBox="1853.314453125 1931.7803955078125 71.8848876953125 42.0172119140625" class="path9"><path d="M 1853.314453125 1931.780395507813 L 1925.199340820313 1931.780395507813 L 1899.887817382813 1973.797607421875 L 1853.314453125 1931.780395507813 Z"  /></svg>
</div>
            <svg data-layer="2dd9f362-0af5-4049-b012-6e5271e73faa" preserveAspectRatio="none" viewBox="1360.8330078125 1780.8883056640625 492.57421875 149.464599609375" class="path10"><path d="M 1360.8330078125 1930.352905273438 C 1360.8330078125 1930.352905273438 1447.294921875 1915.316162109375 1436.017211914063 1828.854370117188 C 1424.739501953125 1742.392578125 1716.196655273438 1793.194702148438 1763.2509765625 1823.993774414063 C 1810.305297851563 1854.792846679688 1816.2939453125 1893.291870117188 1847.948608398438 1893.291870117188 C 1879.603271484375 1893.291870117188 1763.2509765625 1924.946533203125 1763.2509765625 1924.946533203125 L 1360.8330078125 1930.352905273438"  /></svg>
</div>
        <div data-layer="1db146c5-a10f-4462-877e-e3afb7d699d0" class="untitled1"></div>
        <svg data-layer="6310e054-1287-4c86-8dff-724f10d9ab53" preserveAspectRatio="none" viewBox="82.47567749023438 1325.47216796875 1640.9486083984375 56.4122314453125" class="path1"><path d="M 1723.424438476563 1354.071533203125 C 1723.424438476563 1354.071533203125 1569.230712890625 1321.550048828125 1343.31884765625 1325.866821289063 C 1117.406982421875 1330.18359375 1207.054565429688 1365.797607421875 930.940185546875 1371.193603515625 C 654.8258056640625 1376.589599609375 611.7950439453125 1340.975708007813 432.4998779296875 1339.896484375 C 253.2047119140625 1338.8173828125 84.6673583984375 1362.559814453125 84.6673583984375 1362.559814453125 C 84.6673583984375 1362.559814453125 79.736083984375 1369.41259765625 84.6673583984375 1371.302001953125 C 89.5986328125 1373.191284179688 236.78125 1348.252563476563 432.4998779296875 1349.00830078125 C 628.218505859375 1349.763916015625 623.47705078125 1381.504150390625 930.940185546875 1381.882080078125 C 1238.4033203125 1382.259887695313 1129.331298828125 1336.161010742188 1343.31884765625 1335.02734375 C 1557.306396484375 1333.893798828125 1702.947143554688 1360.721923828125 1702.947143554688 1360.721923828125 L 1723.424438476563 1354.071533203125 Z"  /></svg>
        <svg data-layer="5388a8e7-67c1-442b-9ad5-e845ddbdf55e" preserveAspectRatio="none" viewBox="82.47567749023438 1325.47216796875 1640.9486083984375 56.4122314453125" class="path4"><path d="M 1723.424438476563 1354.071533203125 C 1723.424438476563 1354.071533203125 1569.230712890625 1321.550048828125 1343.31884765625 1325.866821289063 C 1117.406982421875 1330.18359375 1207.054565429688 1365.797607421875 930.940185546875 1371.193603515625 C 654.8258056640625 1376.589599609375 611.7950439453125 1340.975708007813 432.4998779296875 1339.896484375 C 253.2047119140625 1338.8173828125 84.6673583984375 1362.559814453125 84.6673583984375 1362.559814453125 C 84.6673583984375 1362.559814453125 79.736083984375 1369.41259765625 84.6673583984375 1371.302001953125 C 89.5986328125 1373.191284179688 236.78125 1348.252563476563 432.4998779296875 1349.00830078125 C 628.218505859375 1349.763916015625 623.47705078125 1381.504150390625 930.940185546875 1381.882080078125 C 1238.4033203125 1382.259887695313 1129.331298828125 1336.161010742188 1343.31884765625 1335.02734375 C 1557.306396484375 1333.893798828125 1702.947143554688 1360.721923828125 1702.947143554688 1360.721923828125 L 1723.424438476563 1354.071533203125 Z"  /></svg>
        <svg data-layer="d8545b44-8304-42d8-864b-002df9810a18" preserveAspectRatio="none" viewBox="-0.000027179718017578125 0.0000018153805285692215 1640.9486083984375 56.4122314453125" class="path2"><path d="M 1640.94873046875 27.81282043457031 C 1640.94873046875 27.81282043457031 1486.755004882813 60.3343505859375 1260.843139648438 56.01753997802734 C 1034.931396484375 51.7006950378418 1124.578857421875 16.08687973022461 848.4644775390625 10.69087219238281 C 572.35009765625 5.294864654541016 529.3193359375 40.90868377685547 350.024169921875 41.98787689208984 C 170.72900390625 43.06703948974609 2.191650390625 19.32452774047852 2.191650390625 19.32452774047852 C 2.191650390625 19.32452774047852 -2.7396240234375 12.47175216674805 2.191650390625 10.58242416381836 C 7.1229248046875 8.693096160888672 154.3055419921875 33.63185119628906 350.024169921875 32.87615203857422 C 545.7427978515625 32.12045288085938 541.0013427734375 0.3801765441894531 848.4644775390625 0.00231170654296875 C 1155.927612304688 -0.3755226135253906 1046.855590820313 45.723388671875 1260.843139648438 46.85698699951172 C 1474.830688476563 47.99055099487305 1620.471435546875 21.16250228881836 1620.471435546875 21.16250228881836 L 1640.94873046875 27.81282043457031 Z"  /></svg>
        <svg data-layer="83e61190-5337-48bc-b575-30943ea168a3" preserveAspectRatio="none" viewBox="-0.000027179718017578125 0.0000018153805285692215 1640.9486083984375 56.4122314453125" class="path3"><path d="M 1640.94873046875 27.81282043457031 C 1640.94873046875 27.81282043457031 1486.755004882813 60.3343505859375 1260.843139648438 56.01753997802734 C 1034.931396484375 51.7006950378418 1124.578857421875 16.08687973022461 848.4644775390625 10.69087219238281 C 572.35009765625 5.294864654541016 529.3193359375 40.90868377685547 350.024169921875 41.98787689208984 C 170.72900390625 43.06703948974609 2.191650390625 19.32452774047852 2.191650390625 19.32452774047852 C 2.191650390625 19.32452774047852 -2.7396240234375 12.47175216674805 2.191650390625 10.58242416381836 C 7.1229248046875 8.693096160888672 154.3055419921875 33.63185119628906 350.024169921875 32.87615203857422 C 545.7427978515625 32.12045288085938 541.0013427734375 0.3801765441894531 848.4644775390625 0.00231170654296875 C 1155.927612304688 -0.3755226135253906 1046.855590820313 45.723388671875 1260.843139648438 46.85698699951172 C 1474.830688476563 47.99055099487305 1620.471435546875 21.16250228881836 1620.471435546875 21.16250228881836 L 1640.94873046875 27.81282043457031 Z"  /></svg>
        <div data-layer="c4bdd7c8-d315-47b2-b712-0b63889c15ed" class="anaMenu">ana menu</div>
        <div data-layer="469cebec-2059-4115-a402-544cae1cf426" class="forumlar">Forumlar</div>
        <div data-layer="a4c3bfc3-2e96-46c8-bc75-46ed9e994d2b" class="takvim">Takvim </div>
        <div data-layer="5faa5bd5-f6a5-47e4-b64f-ffaa46ef6a44" class="hosting">hosting</div>
        <div data-layer="f5865554-a9b2-47f3-aa4c-355049f24c64" class="iletisim">iletisim</div>
        <div data-layer="677d500f-c68c-4f7f-8060-f623779c7a59" class="alimTarihleri">alim tarihleri</div>
        <div data-layer="c9d7a2bf-d86c-4bf8-a121-de7c0e847b45" class="gelecekBuyuler">gelecek buyuler</div>
        <div data-layer="2856c75c-1cd0-411f-a1aa-fbcb728f73e2" class="devaminiokufe407b15">Devamini<br />oku</div>
        <div data-layer="a4497733-7917-4fb4-82da-7f469a5ba2e2" class="sevgiliKediHogwartsrpOyuncularYetkiliAlm8Ubat1800daRolAlmlarIse9UbatSaat1600daGercekleecektirKaranlkTaraf">Sevgili Kedi HogwartsRP oyuncuları, yetkili alımı 8 şubat 18:00'da, rol alımları ise 9 şubat saat 16:00'da gerçekleşecektir. Karanlık taraf...</div>
        <div data-layer="e68aa46a-1475-40f9-a4a6-7fef0c2f3afc" class="homenumRevelioHerbiforsInanimatusConjurusGibiBuyuleri10DengelemelerleGetirmeyiPlanlyoruz">Homenum Revelio, Herbifors, Inanimatus Conjurus gibi büyüleri 10. dengelemelerle getirmeyi planlıyoruz!</div>
        <div data-layer="62380785-699a-4a1d-876a-18479d988ae8" class="group5">            <div data-layer="6a1bc288-11e8-4858-9ab2-771c5545b34d" class="rectangle9"></div>
            <div data-layer="40acae87-cdc5-471c-b24b-593dfa00d9e5" class="rectangle10"></div>
</div>
        <div data-layer="76c25cb4-9511-48b1-a8f2-fb9f5b287545" class="x112451f5dad784"></div>
        <div data-layer="40d4fbdd-6f34-4b00-bbfd-3d54e64137c4" class="x561261"></div>
        <div data-layer="e9c50a0f-1e5e-4d4a-8295-5382a381a87a" class="sevgiliKediHogwartsrpOyuncularYetkiliAlm8Ubat1800daRolAlmlarIse9UbatSaat1600daGercekleecektirKaranlkTarafAlmlar12Ubat1800aErtelenmitirSeherbazAlmlarDaKaranlkTarafAlmlarylaBeraberGercekleecektir">Sevgili Kedi HogwartsRP oyuncuları, yetkili alımı 8 şubat 18:00'da, rol alımları ise 9 şubat saat 16:00'da gerçekleşecektir. Karanlık taraf alımları 12 şubat 18:00'a ertelenmiştir. Seherbaz alımları da karanlık taraf alımlarıyla beraber gerçekleşecektir.<br /><br />-Aurora Spellman</div>
        <div data-layer="7fe30f9e-f580-4282-9887-fb21001357f0" class="x112451"></div>
        <svg data-layer="bf96e1e9-5df7-4818-a36d-94f9d9b33fd8" preserveAspectRatio="none" viewBox="-29.321949005126953 2090.60595703125 2049.697265625 245.9453125" class="path11"><path d="M -29.32194900512695 2121.783203125 C -29.32194900512695 2121.783203125 189.2119445800781 2060.932373046875 309.7823791503906 2109.255126953125 C 430.3528137207031 2157.577880859375 611.20849609375 2263.172119140625 611.20849609375 2263.172119140625 C 611.20849609375 2263.172119140625 764.4334106445313 2293.59765625 965.3841552734375 2272.12060546875 C 1166.334838867188 2250.64404296875 1696.34228515625 2220.218505859375 1819.424682617188 2223.7978515625 C 1942.506958007813 2227.37744140625 2020.37548828125 2223.7978515625 2020.37548828125 2223.7978515625 L 1960.090209960938 2272.12060546875 L 633.8154296875 2336.55126953125 L -29.32194900512695 2272.12060546875 L -29.32194900512695 2121.783203125 Z"  /></svg>
        <div data-layer="5c8fdd8b-c91a-4070-bda6-3fa6cb5ed574" class="devaminioku">Devamini<br />oku</div>
        <div data-layer="504c8c0d-f94f-404d-96bd-b117f2f3340d" class="dengeleme10da">Dengeleme 10'da!</div>
        <svg data-layer="4848455b-c0f9-4abe-8354-fe3b244750c1" preserveAspectRatio="none" viewBox="0 0 40 35" class="polygon3"><path d="M 14.7905387878418 9.116554260253906 C 17.09390449523926 5.085665225982666 22.90609359741211 5.085664749145508 25.20945739746094 9.11655330657959 L 34.87038040161133 26.02316665649414 C 37.15605926513672 30.02310752868652 34.26785659790039 35 29.66092109680176 35 L 10.33907794952393 35 C 5.732141494750977 35 2.843938827514648 30.02310752868652 5.129618644714355 26.02316665649414 Z"  /></svg>
        <div data-layer="c20a213e-413b-4236-b176-5e8dc13c1e7f" class="logOut">Log Out</div>
</div>

    `;
  }
}
customElements.define('web19204-element', Web19204);
